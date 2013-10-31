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
			?>
		
			<div class="header">
				<h3>jingo</h3>
			</div>
				
			<div class = 'secondheader'>		
				<div id = 'dropdownmenu'>
					<ul>
						<li ><a href='nearbynotes.php'><span>Filter</span></a>
						</li>
					   	<li class='has-sub'><a href='#'><span>Distance</span></a>
					     	<ul>
					     		<li><a href='nearbyradius.php?radius=0.1'><span>0.1&nbsp; miles</span></a></li>
						        <li><a href='nearbyradius.php?radius=0.2'><span>0.2 &nbsp;&nbsp;&nbsp;mile</span></a></li>
						        <li><a href='nearbyradius.php?radius=0.3'><span>0.3 &nbsp;&nbsp;&nbsp;miles</span></a></li>
						        <li><a href='nearbyradius.php?radius=0.4'><span>0.4 &nbsp;&nbsp;&nbsp;miles</span></a></li>
						        <li><a href='nearbyradius.php?radius=0.5'><span>0.5&nbsp;&nbsp;&nbsp;miles</span></a></li>
						        <li class='last'><a href='nearbyradius.php?radius=1'><span>1&nbsp;&nbsp; miles</span></a></li>
						    </ul>
						</li>
						<li class='has-sub'><a href='#'><span>Time</span></a>
					     	<ul>
					     	 	<li><a href='nearbytime.php?time=30'><span>30&nbsp; min</span></a></li>
						        <li><a href='nearbytime.php?time=60'><span>1&nbsp;&nbsp;&nbsp;hour</span></a></li>
						        <li><a href='nearbytime.php?time=300'><span>5&nbsp;&nbsp;&nbsp;hours</span></a></li>
						        <li><a href='nearbytime.php?time=720'><span>12 &nbsp;hours</span></a></li>
						        <li><a href='nearbytime.php?time=1440'><span>1&nbsp;&nbsp;&nbsp;day</span></a></li>
						        <li class='last'><a href='#'><span>1&nbsp;&nbsp;&nbsp;week</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<div class="content"> <div style= "width:320px; height:328px; overflow-y:scroll;">	
				<table id="note-table">		
    				<tbody>
    					<?php

    					    $radius = "";
                            if (isset($_GET['radius'])) {
                              	$radius=$_GET['radius'];
                            }
                            echo $radius;
                            
    						$querynote = "SELECT IMAGE, USERNAME, CONTENT, NID
										  FROM NOTE NATURAL JOIN USER NATURAL JOIN HEADIMAGE";
									  	  //WHERE USERNAME = '$_SESSION[$username]'";
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