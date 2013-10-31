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
				<h4>Radius</h4>
				<form>
					<input type = "button" value = "Cancel" class = "leftbutton" onclick='location.href = "noteedite.php"'/>
				</form>
				<form action="mynotes.php">
					<input type="button" value="Save" class="rightbutton" onclick='location.href="noteedite.php"'/>
				</form>
			</div>
			<div class="content">
				
				<form action="">
				    		<input type="submit" value="1 mile" class="signupbutton"/>
				    		<input type="submit" value="2 mile" class="signinbutton" onclick = 'location.href = "signinpage.php"'/>
                            <input type="submit" value="3 mile" class="signupbutton"/>
                            <input type="submit" value="4 mile" class="signinbutton" onclick = 'location.href = "signinpage.php"'/>
                            <input type="submit" value="5 mile" class="signupbutton"/>
                            <input type="submit" value="6 mile" class="signinbutton" onclick = 'location.href = "signinpage.php"'/>
                            <input type="submit" value="7 mile" class="signupbutton"/>
                            <input type="submit" value="8 mile" class="signinbutton" onclick = 'location.href = "signinpage.php"'/>
                            <input type="submit" value="9 mile" class="signupbutton"/>
                            <input type="submit" value="10 mile" class="signinbutton" onclick = 'location.href = "signinpage.php"'/>
				</form>
				</form>
				</form>

			</div>

		</div>
	</div>
</body>

</html>