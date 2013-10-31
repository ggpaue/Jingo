<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/signupstyle.css" rel="stylesheet" type="text/css" />
	<style type = "text/css">
		h3{text-align:center; font-family: Microsoft Yahei;color: #383838;}
	</style>
	<script type="text/javascript" src="jquery.js">
		
	</script>
</head>

<body>

	<div id="wrapper">	
		<div class="interface">

		<?php
			include 'config.php';
		
			$err = '';
			$username = '';
			$email = '';
			$password ='';
			$password1 = '';
		
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$password1 = $_POST['password1'];
								
			if ($_POST['username'] == '') {
				$err = 'Please enter username';
			}
					
			if ($_POST['email'] == '') {
				$err = 'Please provide email';
			}
					
			if ($_POST['password'] == '') {
				$err = 'Please set a password';
			}
					
			if ($_POST['password'] != $_POST['password1']) {
				$err = 'Password mismatch';
			}
					
			if ($err == '') {
				$insert = "INSERT INTO USER VALUES
						   (default, '$username', '$password', '$email', now())";
				$register = $mysql -> query($insert);
						
				if ($register) {
					echo "<script type='text/javascript'> alert('Welcome join us!') </script>";
				}
						
				else {
					echo "<script type='text/javascript'> alert('There is a problem in user registration') </script>";
				}
			}
											
			else {
				echo "<br/><br/><br/><br/><br/><br/><br/><br/>";
				echo "<h2> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$err."</h2>";
			}
					
		?>
		
		</div>	
	</div>
	
</body>

</html>