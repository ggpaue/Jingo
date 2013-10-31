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
		echo "<br><br><br><br><br>";
		echo "<h2>"."Goodbye, "."<br><br>".$_SESSION['username']."!"."</h2>";
		
		session_destroy();
		header("refresh: 1; signinpage.php");
	?>
	
	</div>
	
	</div>
	
</body>

</html>