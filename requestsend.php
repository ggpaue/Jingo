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
			$user1 = '';
				
			if (isset($_GET['user1'])) {
				$user1 = $_GET['user1'];
			}
			
			$checkid = "select uid from user where username = '".$user1."'";
			$result = $mysql -> query($checkid);
			$row = $result -> fetch_row();
			
			$insert = "INSERT INTO FRIEND VALUES('".$_SESSION['uid']."','$row[0]', 0, now())";
            $mysql->query($insert);
            
			echo "<h2>"."<br/><br/><br/><br/><br/>"."You have sent a friend request to"."<br/>".$user1."</h2>";
			header("refresh: 1; friendslist.php");	
	?>
	
	</div>
	
	</div>
	
</body>

</html>