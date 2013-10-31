<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/signupstyle.css" rel="stylesheet" type="text/css" />
	<link href="css/menu.css" rel="stylesheet" type="text/css"  />
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/menu1.js"></script>
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
				$note = '';
				if (isset($_POST['note'])) {
					$note = $_POST['note'];
				}
				/*
				$insertnote = "INSERT INTO 'NOTE' VALUES
							   (DEFAULT"
				*/
			?>
		
			<div class="header">
				<h3>jingo</h3>
				<form action="mynotes.php">
					<input type="button" value="New" class="rightbutton" onclick='location.href="writenote.php"'/>
				</form>
			</div>
			
			<div class = 'secondheader'>		
				<h4>My posts</h4>
			</div>
				
			<div class="content"> <div style= "width:320px; height:328px; overflow-y:scroll;">	
				<table id="note-table">		
    				<tbody>
    					<?php
    						$querynote = "SELECT image, USERNAME, CONTENT, nid
										  FROM NOTE NATURAL JOIN USER NATURAL JOIN HEADIMAGE
									  	  WHERE USERNAME = '".$_SESSION['username']."'";
							$result = $mysql -> query($querynote);
							$num = $result -> num_rows;
    						if ($num) {
    							while ($row = $result -> fetch_array(MYSQLI_NUM)) {
    								echo "<tr>";
									echo "<td><div class = 'user'><p>";
									echo "<form action = 'userprofile.php' method = 'get'>";
									echo "<a href='userprofile.php?username=".$row[1]."'>"."<img src= '".$row[0]."' height='45' width='45' ></img></a>";
									echo "</form></p></div></td>";
									echo "<td>";
									echo "<form class = 'note' action = 'showcomment.php' method = 'get'><p>";
									echo "<a href='showcomment.php?nid=".$row[3]."'>".$row[1]."<br/>".$row[2]."</p></form></td>";
									echo "</tr>";
    							}
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