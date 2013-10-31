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
				<h4> Settings</h4>
				<form>
					<input type = "button" value = "Back" class = "leftbutton" onclick='location.href = "homepage.php"'/>
				</form>
			</div>
			<div class="content">
				<form action="">
				    		
				    		<input type="button" value="State" class="signinbutton" onclick = 'location.href = "statesettings.php"'/>
				    		<input type="button" value="Timefilter" class="signupbutton" onclick = 'location.href = "timefiltersettings.php"'/>


				</form>

			</div>

		</div>
	</div>
</body>

</html>