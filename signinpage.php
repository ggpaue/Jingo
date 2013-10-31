<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/signupstyle.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
</head>

<body>
	<div id="wrapper">
		<div class="interface">
		
			<?php
				include 'config.php';
			?>
			
			<div class="header">
				<h3>jingo</h3>
			</div>
			
	    	<div class="content">  
	    		<form action = "welcomepage.php" method = "post">  		
					<input name="username" type="text" class="input" placeholder="Username" onfocus="this.value=''" />
	    			<input name="password" type="password" class="input" placeholder="Password" onfocus="this.value=''" />
	
	    			<br/>
	    		
	    			<input type="submit" value="Sign in" class="signinbutton"/>
	    			<input type="button" value="Sign up" class="signupbutton" onclick = 'location.href = "signuppage.php"'/>
				
				
				</form>
			</div>
			
		</div>

	</div>

</body>

</html>