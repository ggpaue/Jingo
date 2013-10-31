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
		
			$lat = '';
			$lng = '';
				
			if (isset($_POST['latitude']) && isset($_POST['longitude'])) {
				$lat = $_POST['latitude'];
				$lng = $_POST['longitude'];
			}
			$_SESSION['lat'] = $lat;
			$_SESSION['lng'] = $lng;
			$insert = "UPDATE user_position
                       SET latitude='".$_SESSION['lat']."', longitude='".$_SESSION['lng']."'
                       where uid='".$_SESSION['uid']."'";
            $insertresult = $mysql->query($insert);
			echo "<h2>"."<br/><br/><br/><br/><br/>"."Location changed!"."</h2>";
			header("refresh: 1; nearbynotes.php");		
		?>
	
	</div>
	
	</div>
	
</body>

</html>
