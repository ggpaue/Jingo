<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/signupstyle.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<style type = "text/css">
		h2{text-align:center; font-family: Microsoft Yahei;color: #383838;}
	</style>
</head>

<body>

	<div id="wrapper">
	
	<div class="interface">
	
	<?php
		include 'config.php';
		session_start();
		$_SESSION['uid'] = '';
		$_SESSION['username'] = '';
		$_SESSION['password'] = '';
		$_SESSION['lat'] = 40.6925;
		$_SESSION['lng'] = -73.986872;
		$_SESSION['statename'] = "just chilling";
		if (isset($_POST['username'])) {
			$_SESSION['username'] = $_POST['username'];
		}
		if (isset($_POST['password'])) {
			$_SESSION['password'] = $_POST['password'];
		}
		// echo $username.$password;
		$querysignin = "SELECT UID 
						FROM USER 
						WHERE USERNAME = '".$_SESSION['username'].
						"'AND PASSWORD = '".$_SESSION['password']."'"; 
		
		$checkresult = $mysql -> query($querysignin);
		
		$count = $checkresult -> num_rows;
		echo "<br><br><br><br><br>";
		if ($count == 1) {
			$row = $checkresult -> fetch_row(); 
			$_SESSION['uid'] = $row[0];
			echo "<h2>"."Welcome back, "."<br><br>".$_SESSION['username']."!"."</h2>";
			header("refresh: 1; homepage.php");
		}
		else {
			echo "<h2>"."Your username and password don't match"."</h2>";
			header("refresh: 1; signinpage.php");
		}
		
	?>
	
	</div>
	
	</div>
	
</body>

</html>

		
	