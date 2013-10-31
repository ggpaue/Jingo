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
				<h4>Repeat</h4>
				<form>
					<input type = "button" value = "Cancel" class = "leftbutton" onclick='location.href = "notetime.php"'/>
				</form>
				<form action="mynotes.php">
					<input type="button" value="Save" class="rightbutton" onclick='location.href="notetime.php"'/>
				</form>
			</div>
			<div class="content">
				
				<form action="">
				    		<input type="submit" value="Never" class="signupbutton"/>
				    		<input type="submit" value="Everyday" class="signinbutton" onclick = 'location.href = "signinpage.php"'/>
                            <input type="submit" value="Everyweek" class="signupbutton"/>
                            <input type="submit" value="Everymonth" class="signinbutton" onclick = 'location.href = "signinpage.php"'/>
				</form>

			</div>

		</div>
	</div>
</body>

</html>