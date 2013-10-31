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
		
			<div class="header">
				<h3>jingo</h3>
			</div>
			<div class="content"> <div style= "width:320px; height:328px; overflow-y:scroll;">	
				<table id="note-table">		
    				<tbody>
    					<?php
    					    $dbhost="localhost";
                            $dbuser="root";
                            $dbpass="";
                            $dberror1="could not connect to the database!";
                            $conn=mysql_connect($dbhost,$dbuser,$dbpass) or die($dberror1);
                            $select_db=mysql_select_db("jingo") or die ("Couldn't select database!");
                             session_start();

    						$querynote = "SELECT  distinct set1.username, CONTENT 
		                                          FROM (SELECT * 
                                                  FROM note as N NATURAL JOIN 
                                                       comment AS c   NATURAL JOIN 
                                                       user        NATURAL JOIN 
			                                            note_tag AS NT
                                                        )AS SET1,
                                                  (SELECT *
                                                   FROM user as U natural join 
                                                   user_position as UP ) AS SET2
		                                 WHERE SET2.username = '".$_SESSION['username'].
		                                  "'AND 6.28/360*3960*sqrt((power((SET1.latitude - SET2.latitude), 2) 
                                          + power((SET1.longitude - SET2.longitude), 2))) < SET1.radius ";

									  	  //WHERE USERNAME = '$_SESSION[$username]'";
                                $result = mysql_query($querynote) or die('Query failed: ' . mysql_error());
    							while ($row = mysql_fetch_array($result, MYSQL_NUM)) {
    								echo "<tr>";
									echo "<td><div class = 'user'><p>";
    								echo "<form action = 'userprofile.php' method = 'get'>";
    								echo "<a href='userprofile.php?username=".$row[0]."'>".$row[0]."</a>";
    								echo "</form></p></div></td>";
    								echo "<td><div class = 'note'><p>".$row[1]."</p></div></td>";
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