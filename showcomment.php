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
				$nid = '';
				if (isset($_GET['nid'])) {
                	$nid = $_GET['nid'];
                }
			?>
		
			<div class="header">
				<h3>jingo</h3>
				<form>
					<input type="button" value="Back" class="leftbutton" onclick="history.go(-1);"/>
				</form>
				<form action="writecomment.php" method='get'>
					<input type="button" value="Write" class="rightbutton" onclick='location.href="writecomment.php?nid=<?php echo $nid;?> "'/>
				</form>
			</div>
				
			<div class = 'secondheader'>		
				<h4>Note review</h4>
			</div>
			<div class="content"> <div style= "width:320px; height:328px; overflow-y:scroll;">	
				<table id="note-table">		
    				<tbody>
    					<?php
    						$querynote = "SELECT IMAGE, USERNAME, CONTENT
										  FROM NOTE NATURAL JOIN USER NATURAL JOIN HEADIMAGE
									  	  WHERE nid = '$nid'";
    						$querycomment = "SELECT IMAGE, USERNAME, COMMENT, RATING
											 FROM COMMENT NATURAL JOIN USER NATURAL JOIN HEADIMAGE
											 WHERE nid = '$nid'";
							$queryrating = "SELECT AVG(RATING) FROM COMMENT WHERE nid = '$nid' GROUP BY nid";
							$result1 = $mysql -> query($querynote);
							$result2 = $mysql -> query($querycomment);
							$result3 = $mysql -> query($queryrating);
							$note = $result1 -> fetch_array(MYSQLI_NUM);
							$avgrating = $result3 -> fetch_array(MYSQLI_NUM);
							echo "<tr>";
							echo "<td><div class = 'user'><p>";
							echo "<form action = 'userprofile.php' method = 'get'>";
							echo "<a href='userprofile.php?username=".$note[1]."'>"."<img src= '".$note[0]."' height='45' width='45' ></img></a>";
							echo "</form></p></div></td>";
							echo "<td><div class = 'note'><p><b>".$note[1]."</b><br/>".$note[2]."<br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;avg rating: ".$avgrating[0]."</p></div></td>";
							echo "</tr>";
    						while ($comment = $result2 -> fetch_array(MYSQLI_NUM)) {
    							echo "<tr>";
								echo "<td><div class = 'user'><p>";
    							echo "<form action = 'userprofile.php' method = 'get'>";
    							echo "<a href='userprofile.php?username=".$comment[1]."'>"."<img src= '".$comment[0]."' height='45' width='45' ></img></a>";
    							echo "</form></p></div></td>";
    							echo "<td><div class = 'note'><p><b>".$comment[1]."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rating:".$comment[3]."<br/>".$comment[2]."</p></div></td>";
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