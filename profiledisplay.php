<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/signupstyle.css" rel="stylesheet" type="text/css" />
	<link href="css/menu.css" rel="stylesheet" type="text/css"  />
	<script type="text/javascript" src="js/jquery.js"></script>
	<style type = "text/css">
		h2 {text-align:center; font-family: Microsoft Yahei;color: #383838;}
	</style>
</head>

<body>
	<div id="wrapper">
		<div class="interface">
		
			<?php
				include 'config.php';
				session_start();
				$queryprofile = "SELECT USERNAME, EMAIL, FIRSTNAME, LASTNAME, 
										BIRTHDAY, GENDER, PHONE, CATEGORY
								 FROM USER NATURAL JOIN PROFILE
								 WHERE USERNAME = '".$_SESSION['username']."'";
				$result = $mysql -> query($queryprofile);
				$row = $result -> fetch_array(MYSQLI_NUM);
			?>
			
			<div class="header">
				<h4><?php echo $_SESSION['username']; ?></h4>
				<form>
					<input type = "button" value = "Edit" class = "leftbutton" onclick='location.href = "profileedit.php"'/>
				</form>
			</div>
			<div class = 'secondheader'>		
				<div id = 'dropdownmenu'>
					<ul>
						<li><a href='#'>State</a></li>
						<li class='has-sub'><a href='#'><span> <?php echo $_SESSION['statename']; ?> </span></a>
					     	<ul>		     		
					     	 	<li><form action="statechanged.php" method ="get"><a href="statechanged.php?state = 1"><span>At work</span></a></form></li>
						        <li><form action="statechanged.php" method ="get"><a href="statechanged.php?state = 2"><span>Just Chilling</span></a></form></li>
						        <li><form action="statechanged.php" method ="get"><a href="statechanged.php?state = 3"><span>Lunch break</span></a></form></li>
						        <li><form action="statechanged.php" method ="get"><a href="statechanged.php?state = 4"><span>In travel</span></a></form></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<div class="content"><div style= "width:320px; height:328px; overflow-y:scroll;">
				 <table id="profile-table">
				 	<thead>
				 		<tr>
				 			<th>Account &nbsp; &nbsp; &nbsp;</th>
				 			<th> </th>
				 		</tr>
				 	</thead>
    				<tbody>
    					<tr>
           					<td>Username</td>
           					<td><?php echo $row[0]; ?></td>
       					</tr>
        				<tr>
            				<td>Email</td>
            				<td><?php echo $row[1]; ?></td>         
        				</tr>
        				
    				</tbody>
				</table>  
				
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
           					<td><?php echo $row[2].' '.$row[3]; ?></td>
       					</tr>
        				<tr>
            				<td>Birthday</td>
            				<td><?php echo $row[4]; ?></td>
        				</tr>
       				 	<tr>
            				<td>Gender</td>
            				<td><?php echo $row[5]; ?></td>
        				</tr>
        				<tr>
            				<td>Phone</td>
            				<td><?php echo $row[6]; ?></td>   
       					</tr>
       	 				<tr>
            				<td>Category</td>
            				<td><?php echo $row[7]; ?></td>
        				</tr>
    				</tbody>
				</table>  
				<br/>
			</div></div>
		
			<div class="bottom">
				<ul>
					<li><a href="homepage.php"><img src = "images/mini/mini-white/38-house@2x.png" height="25" width="28"></img><br/>Home<br/></a></li>
					<li><a href="nearbynotes.php"><img src = "images/icons/icons-white/74-location@2x.png" height="25" width="25"></img><br/>Nearby<br/></a></li>
					<li><a href="mapview.php"><img src = "images/icons/icons-white/07-map-marker@2x.png" height="25" width="17"></img><br/>Location<br/></a></li>
					<li><a href="profiledisplay.php"><img src = "images/icons/icons-white/253-person@2x.png" height="25" width="27"></img><br/>Me<br/></a></li>
				 	<li><a href="#"><img src = "images/icons/icons-white/19-gear@2x.png" height="25" width="25"></img><br/>Setting<br/></a></li>
				</ul>
			</div>
		</div>
	</div>
</body>

</html>
				