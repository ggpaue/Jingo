<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/signupstyle.css" rel="stylesheet" type="text/css" />
	<script>
		function validate_un() {
			var x = document.forms["interface"]["username"].value;
			if (x=='' || x==null) {
				alert ('username cannot be blank!');
				return false;
			}
		}
	</script>
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
			    		<form action = "welcomejoinus.php" method = "post">
							<input name="username" 	type="text" 	class="input" placeholder="Username" onfocus="this.value=''" />
							<input name="email" 	type="text" 	class="input" placeholder="email" onfocus="this.value=''" />
				    		<input name="password" 	type="password" class="input" placeholder="Password" onfocus="this.value=''" />
				    		<input name="password1" type="password" class="input" placeholder="Confirm password" onfocus="this.value=''" />
			    		
				    		<br/>
				    		
				    		<input type="button" value="Sign in" class="signinbutton" onclick = 'location.href = "signinpage.php"'/>
				    		<input type="submit" value="Sign up" class="signupbutton"/>
				    	</form>
					</div>

		</div>		
	</div>

</body>

</html>