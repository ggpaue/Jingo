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
						<li><a href='showall.php'><span>Show all</span></a></li>
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
					     	 	<li><a href='nearbytag.php?time=30'><span>30&nbsp; min</span></a></li>
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
    					    $dbhost="localhost";
                            $dbuser="root";
                            $dbpass="";
                            $dberror1="could not connect to the database!";
                            $conn=mysql_connect($dbhost,$dbuser,$dbpass) or die($dberror1);
                            $select_db=mysql_select_db("jingo") or die ("Couldn't select database!");
                            session_start();

    						$querynote =
								       "Select username, content
								        from note natural join user
								        where nid in (SELECT nid
										FROM note as N, user as U natural join user_position as UP
										WHERE U.username = '".$_SESSION['username']."'
										AND 6.28/360*3960*sqrt((power((N.latitude - UP.latitude), 2) + power((N.longitude - UP.longitude), 2))) < N.radius 
								        and nid in
									            (SELECT SET1.nid
												 FROM (SELECT * 
													   FROM note as N natural join 
														    note_tag as NT natural join 
														    note_schedule as NS natural join 
					   										note_time as NTI
					   								   ) as SET1,
													  (SELECT *
													   FROM user as U natural join 
														    currentstate as CS natural join 
														    statefilter as SF   
												       ) as SET2
												WHERE SET1.tid = SET2.tid
												AND U.username = '".$_SESSION['username']."'
												AND curdate() = SET1.occur_day
												AND curtime() >= SET1.start_time
												AND curtime() <= SET1.end_time)								
										        AND nid in (SELECT SET1.nid
															FROM (SELECT *
																  FROM note as N natural join 
																	   note_tag as NT natural join 
																	   note_schedule as NS natural join
																	   note_time as NTI) as SET1, 
																 (SELECT *
																  FROM user as U natural join 
																	   timefilter_time as TFT natural join 
																	   timefilter_schedule  as TFS natural join
																	   timefilter as TF) as SET2
															WHERE curdate() >= SET1.start_date
															AND U.username = '".$_SESSION['username']."'
															AND curdate() <= SET1.end_date
								                            AND curtime() >= SET1.start_time
															AND curtime() <= SET1.end_time
															AND curdate() = SET2.occur_day
															AND curtime() >= SET2.start_time
															AND curtime() <= SET2.end_time
															AND SET1.tid = SET2.tid))";

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