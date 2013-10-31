<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/signupstyle.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/jquery.js"></script>
</head>

<body>
	<div id="wrapper">
		<div class="interface">
		
			<?php
				include 'config.php';
				session_start();
				$username_this = '';
				
				if(isset($_GET['username'])) {
					$username_this = $_GET['username'];
				}
				
				$queryprofile = "SELECT FIRSTNAME, LASTNAME,
								 BIRTHDAY, GENDER, PHONE, CATEGORY
								 FROM USER NATURAL JOIN PROFILE
								 WHERE USERNAME = '".$username_this."'";
				$result = $mysql -> query($queryprofile);
				$row = $result -> fetch_array(MYSQLI_NUM);
			?>	
			
			<div class="header">
				<h4>
					<?php echo $username_this; ?>
				</h4>
				<form>
					<input type = "button" value = "Back" class = "leftbutton" onclick='history.go(-1);'/>
				</form>
			</div>
			
			<div class="content">	
				
				<table id="profile-table">
				 	<thead>
				 		<tr>
				 			<th>Profile</th>
				 			<th> </th>
				 		</tr>
				 	</thead>
    				<tbody>
        				<tr>
           					<td>Name</td>
           					<td><?php echo $row[0].' '.$row[1]; ?></td>
       					</tr>
        				<tr>
            				<td>Birthday</td>
            				<td><?php echo $row[2]; ?></td>
        				</tr>
       				 	<tr>
            				<td>Gender</td>
            				<td><?php echo $row[3]; ?></td>
        				</tr>
        				<tr>
            				<td>Phone</td>
            				<td><?php echo $row[4]; ?></td>   
       					</tr>
       	 				<tr>
            				<td>Category</td>
            				<td><?php echo $row[5]; ?></td>
        				</tr>
    				</tbody>
				</table>
				
				<?php
					$checkrelation = "SELECT * FROM FRIEND AS F, USER AS U1, USER AS U2
									  WHERE ((U1.UID = F.USER1 AND U2.UID = F.USER2) OR
									         (U2.UID = F.USER1 AND U1.UID = F.USER2))
									    AND ((U1.USERNAME = '$username_this' AND U2.USERNAME = '".$_SESSION['username']."') OR
									         (U2.USERNAME = '$username_this' AND U2.USERNAME = '".$_SESSION['username']."'))
										AND F.STATUS = 1";
					$check = $mysql -> query($checkrelation);
					$num = $check -> num_rows;
					if (!$num) {
						?>
						<input type='button' value='Add friend' class='addfriendbutton' onclick = 'location.href="requestsend.php?user1=<?php echo $username_this;?>"'/>
						<?php
					}
				?>
				
			</div>
			<div class="bottom">
				<ul>
					<li><a href="homepage.php"><img src = "images/mini/mini-white/38-house@2x.png" height="25" width="28"></img><br/>Home<br/></a></li>
					<li><a href="nearbynotes.php"><img src = "images/icons/icons-white/74-location@2x.png" height="25" width="25"></img><br/>Nearby<br/></a></li>
					<li><a href="mapview.php"><img src = "images/icons/icons-white/07-map-marker@2x.png" height="25" width="17"></img><br/>Location<br/></a></li>
					<li><a href="profiledisplay.php"><img src = "images/icons/icons-white/253-person@2x.png" height="25" width="27"></img><br/>Me<br/></a></li>
				 	<li><a href="settings.php"><img src = "images/icons/icons-white/19-gear@2x.png" height="25" width="25"></img><br/>Setting<br/></a></li>
				</ul>
			</div>
		</div>
	</div>
</body>

</html>
				