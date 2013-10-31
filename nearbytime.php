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
				
			<div class = 'secondheader'>		
				<div id = 'dropdownmenu'>
					<ul>
						<li><a href='#'><span>Filter by</span></a></li>
					   	<li class='has-sub'><a href='#'><span>Distance</span></a>
					     	<ul>
					     		<li><a href='#'><span>0.5&nbsp; miles</span></a></li>
						        <li><a href='#'><span>1 &nbsp;&nbsp;&nbsp;mile</span></a></li>
						        <li><a href='#'><span>2 &nbsp;&nbsp;&nbsp;miles</span></a></li>
						        <li><a href='#'><span>3 &nbsp;&nbsp;&nbsp;miles</span></a></li>
						        <li><a href='#'><span>5 &nbsp;&nbsp;&nbsp;miles</span></a></li>
						        <li class='last'><a href='#'><span>10&nbsp;&nbsp; miles</span></a></li>
						    </ul>
						</li>
						<li class='has-sub'><a href='#'><span>Time</span></a>
					     	<ul>
					     	 	<li><a href='#'><span>30&nbsp; min</span></a></li>
						        <li><a href='#'><span>1&nbsp;&nbsp;&nbsp;hour</span></a></li>
						        <li><a href='#'><span>5&nbsp;&nbsp;&nbsp;hours</span></a></li>
						        <li><a href='#'><span>12 &nbsp;hours</span></a></li>
						        <li><a href='#'><span>1&nbsp;&nbsp;&nbsp;day</span></a></li>
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
    					   include 'config.php';
				            session_start();
    					    $time="";
    					    if(isset($_GET['time']))
                            {
                              $time=$_GET['time'];
                            }
    						$querynote = "SELECT USERNAME, CONTENT 
										  FROM NOTE NATURAL JOIN USER";
									  	  //WHERE USERNAME = '$_SESSION[$username]'";
							$result = $mysql -> query($querynote);
							$num = $result -> num_rows;
    						if ($num) {
    							while ($row = $result -> fetch_array(MYSQLI_NUM)) {
    								echo "<tr>";
									echo "<td><div class = 'user'><p>";
    								echo "<form action = 'userprofile.php' method = 'get'>";
    								echo "<a href='userprofile.php?username=".$row[0]."'>".$row[0]."</a>";
    								echo "</form></p></div></td>";
    								echo "<td><div class = 'note'><p>".$row[1]."</p></div></td>";
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