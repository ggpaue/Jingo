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
			$state = '';
				
			if (isset($_GET['state_'])) {
				$state = $_GET['state_'];
			}
			$_SESSION['state'] = $state;
			$update = "UPDATE currentstate
                       SET state = '".$_SESSION['state']."'
					   WHERE uid = '".$_SESSION['uid']."'";
            $mysql->query($update);
            $searchstate = "SELECT STATE
							FROM STATE
							WHERE SID = '".$_SESSION['state']."'";
            $statename = $mysql -> query($searchstate);
            $row = $statename -> fetch_row();
            $_SESSION['statename'] = $row[0];
			echo "<h2>"."<br/><br/><br/><br/><br/>"."State switched to"."<br/>".$row[0]."</h2>";
			header("refresh: 1; homepage.php");		
	?>
	
	</div>
	
	</div>
	
</body>

</html>
