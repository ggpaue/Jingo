<html>

<head>
	
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
				<h4>Time Range</h4>
				<form>
					<input type = "button" value = "Cancel" class = "leftbutton" onclick='location.href = "mynotes.php"'/>
				</form>
				<form action="mynotes.php">
					<input type="button" value="Save" class="rightbutton" onclick='location.href="mynotes.php"'/>
				</form>
			</div>
			<div class="content">
				
				<form action="">
					<input name="Starttime" type="text" class="longinput2"      placeholder="Start time ( for example: 15:00)" 	onfocus="this.value=''" />
			    	<input name="Endtime" 	type="text" class="longinput2"      placeholder="End time ( for example: 18:00)" 	onfocus="this.value=''" />
			    	<input name="Startdate" type="text" class="longinput2"      placeholder="Start date( for example: 05/01/2012)" 	onfocus="this.value=''" />
			    	<input name="Enddate"   type="text" class="longinput2"      placeholder="End date( for example: 05/10/2012)" 	onfocus="this.value=''" />
				    <br/>
				    		
				    		<input type="button" value="Repeat" class="signinbutton" onclick = 'location.href = "noterepeat.php"'/>
				    		<input type="submit" value="Snooze" class="signupbutton"/>


				</form>

			</div>

		</div>
	</div>
</body>

</html>