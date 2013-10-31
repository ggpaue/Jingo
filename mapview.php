<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns='http://www.w3.org/1999/xhtml'>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/signupstyle.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery.js"></script>
	<script src="js/jquery-gmaps-latlon-picker.js"></script>
	
	<link rel="stylesheet" type="text/css" href="css/demo.css"/>

	<!-- Dependencies: JQuery and GMaps API should be loaded first -->
	<script src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>

	<!-- CSS and JS for our code -->
	<link rel="stylesheet" type="text/css" href="css/jquery-gmaps-latlon-picker.css"/>
	<style>
		div.searchbar {
			text-align: center;
			border-radius: 0px;
			padding: 7px 10px 7px 10px;
			overflow: auto;
			background: #3DA8EB;					
			box-shadow: inset 0 1px 0 rgba(0,0,0,0.15);
			-moz-box-shadow: inset 0 1px 0 rgba(0,0,0,0.15);
			-webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,0.15);}
	</style>
	<style type="text/css">
		.interface .content .rightbutton {
			float: right;
			margin-top: -410px;
			margin-right: 5px;
			width: 60px;
			height: 28px;
			background: rgba(0, 105, 170, 0.9);
			font-weight: 500px;
			color : rgba(251, 251, 251);
			text-align: center;
			border: 1px soild #888888;
			border-radius: 3px;
		}
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
				<h4>Map</h4>
				<form>
					<input type = "button" value = "Cancel" class = "leftbutton" onclick = 'location.href = "homepage.php"'/>
				</form>				
			</div>

			<div class = "content" style="background:#FFFFFF">
				<form method = 'post' action = 'locationchanged.php'>
					<fieldset class="gllpLatlonPicker">
						<div class="searchbar">
							<input type="text" class="gllpSearchField" placeholder="e.g. Central Park"/>
							<input type = "button" class="gllpSearchButton" value = 'Search'/>
						</div>
						<div class="gllpMap">Google Maps</div>
						<input type = 'hidden' name='latitude' class="gllpLatitude" value="40.6925"/>
						<input type = 'hidden' name='longitude' class="gllpLongitude" value="-73.986872"/>
						<input class="gllpZoom" value="11"/>
						<input type = "submit" value = "Save" class = "rightbutton"/>	
					</fieldset>
					
				</form>
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