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
		$nid = '';
		$comment = '';
		$rating = '';
		if (isset($_GET['nid'])) {
			$nid = $_GET['nid'];
		}
		if (isset($_GET['comment'])) {
			$comment = $_GET['comment'];
		}
		if (isset($_GET['rating'])) {
			$rating = $_GET['rating'];
		}

		$comment = $mysql -> real_escape_string($comment);

		$insert = "INSERT INTO COMMENT VALUES
				   (default,  '10006',  '$comment', '$rating', now(), '".$_SESSION['uid']."')";
		
		$insertresult = $mysql->query($insert); 			
		
		if ($insertresult) {
			echo "<script type='text/javascript'> alert('Comment successfully posted') </script>";
			header("refresh: 0; showcomment.php");
		}
		
		else {
			echo "<script type='text/javascript'> alert('There is a problem in your typing') </script>";
			header("refresh: 0; writecomment.php");
		}
		
	?>
	
	</div>
	
	</div>
	
</body>

</html>