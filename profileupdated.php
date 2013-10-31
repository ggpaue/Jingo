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
		$firstname = '';
		$lastname = '';
		$birthday ='';
		$gender = '';
		$phone = '';
		$category = '';
		if (isset($_POST['firstname'])) {
			$firstname = $_POST['firstname'];
		}
		if (isset($_POST['lastname'])) {
			$lastname = $_POST['lastname'];
		}
		if (isset($_POST['birthday'])) {
			$birthday = $_POST['birthday'];
		}
		if (isset($_POST['gender'])) {
			$gender = $_POST['gender'];
		}
		if (isset($_POST['phone'])) {
			$phone = $_POST['phone'];
		}
		if (isset($_POST['category'])) {
			$category = $_POST['category'];
		}

		$firstname = $mysql -> real_escape_string($firstname);
		$lastname = $mysql -> real_escape_string($lastname);
		$birthday = $mysql -> real_escape_string($birthday);
		$gender = $mysql -> real_escape_string($gender);
		$phone = $mysql -> real_escape_string($phone);
		$category = $mysql -> real_escape_string($category);

		$updatefn = "update profile
				     set firstname = '$firstname'
				     where uid = '".$_SESSION['uid']."'";
		$updateln = "update profile
					 set lastname = '$lastname'
					 where uid = '".$_SESSION['uid']."'";
		$updatebd = "update profile
					 set birthday = '$birthday'
					 where uid = '".$_SESSION['uid']."'";
		$updatepn = "update profile
					 set phone = '$phone'
					 where uid = '".$_SESSION['uid']."'";
		$updategd = "update profile
					 set gender = '$gender'
					 where uid = '".$_SESSION['uid']."'";
		$updatecg = "update profile
					 set category = '$category'
					 where uid = '".$_SESSION['uid']."'";
		
		if ($firstname != ''){
			$mysql -> query($updatefn);
		}
		if ($lastname != ''){
			$mysql -> query($updateln);
		}
		if ($birthday != ''){
			$mysql -> query($updatebd);
		}
		if ($phone != ''){
			$mysql -> query($updatepn);
		}
		if ($gender != ''){
			$mysql -> query($updategd);
		}
		if ($category != ''){
			$mysql -> query($updatecg);
		}
		
		echo "<script type='text/javascript'> alert('Profile successfully updated') </script>";
		header("refresh: 0; profiledisplay.php");		
	?>
	
	</div>
	
	</div>
	
</body>

</html>