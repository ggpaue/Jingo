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
			?> 
			<div class="header">
				<h4> 
					<?php
						echo $_SESSION['username']; 
					?> 
				</h4>
				<form>
					<input type = "button" value = "Back" class = "leftbutton" onclick='location.href = "friendslist.php"'/>
				</form>
			</div>
			<div class = 'secondheader'>		
				<h4>Pending friend requests</h4>
			</div>
			<div class="content"> <div style= "width:320px; height:328px; overflow-y:scroll;">	
				<table id="note-table">		
    				<tbody>
    					<?php
    					    
                            $queryfriend = "(select H.image, U1.username
											 from USER as U1, FRIEND, USER as U2, headimage as H
											 where U1.uid = FRIEND.user1
											 and U1.uid = H.uid
											 and U2.uid = FRIEND.user2
											 and U2.uid = '".$_SESSION['uid']."'
											 and status = 0)"; 
                            $result = $mysql -> query($queryfriend);
                            
    						while ($row = $result -> fetch_array(MYSQL_NUM)) {
    							echo "<tr>";
								echo "<td><div class = 'user'><p>";
    							echo "<form action = 'userprofile.php' method = 'get'>";
    							echo "<a href='userprofile.php?username=".$row[1]."'>"."<img src= '".$row[0]."' height='45' width='45' ></img></a>";
    							echo "</form></p></div></td>";
    							echo "<td><div class = 'note'><p>".$row[1]." wants to add you as friend.</p>";
    							echo "<form>";
    							echo "<input type = 'submit' value = 'Decline' class='left' onclick = 'location.href=decision.php?user1='".$row[1]."''/>";
    							echo "<input type = 'submit' value = 'Accept' class='right' onclick = 'location.href=decision.php?user1='$row[1]''/>";
    							echo "</form>";
								echo "</div></td>";
    							echo "</tr>";
    						}
    						
    					?>
       				</tbody>
       			</table>
			</div> </div>
			
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