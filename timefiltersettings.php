<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
	<style type="text/css">
		.interface .content .rightbutton {
			float: right;
			margin-top: -185px;
			margin-right: 5px;
			width: 40px;
			height: 20px;
			background: rgba(0, 105, 170, 0.9);
			font-weight: 500px;
			color : rgba(251, 251, 251);
			text-align: center;
			border: 1px soild #888888;
			border-radius: 3px;
		}
	</style>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/signupstyle.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src=".../js/jquery-1.9.1.min.js"></script>

</head>

<body>
	<?php
		include 'config.php';
	?>
	
	<div id="wrapper">
		<div class = "interface">
			<?php 
				include 'config.php';
			?>
			<div class="header">
				<h4> Timefilter Settings</h4>
				<form>
					<input type = "button" value = "Cancel" class = "leftbutton" onclick='location.href = "settings.php"'/>
				</form>
				<form action="mynotes.php">
					<input type="button" value="Save" class="rightbutton" onclick='location.href="settings.php"'/>
				</form>
			</div>
			<div class="content">
				<form action="mynotes.php" method="post">
					<textarea name='Timetag' placeholder="Please input any tag you like during this time range" onfocus="this.value=''"></textarea> 
					<input name="Starttime" type="text" class="shortinput1"      placeholder="Start time ( for example: 15:00)" 	onfocus="this.value=''" />
			    	<input name="Endtime" 	type="text" class="shortinput2"      placeholder="End time ( for example: 18:00)" 	onfocus="this.value=''" />
			    	<input name="Startdate" type="text" class="shortinput1"      placeholder="Start date( for example: 05/01/2012)" 	onfocus="this.value=''" />
			    	<input name="Enddate"   type="text" class="shortinput2"      placeholder="End date( for example: 05/10/2012)" 	onfocus="this.value=''" />
				</form>
				<form action="">
				    		
				    		<input type="button" value="Repeat" class="signinbutton" onclick = 'location.href = "timerepeat.php"'/>
				    		<input type="button" value="Snooze" class="signupbutton"/>


				</form>

			</div>

		</div>
	</div>
</body>

</html>