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
		$note = '';
		$tag = '';
		$radius = '';
		if (isset($_POST['note'])) {
			$note = $_POST['note'];
		}
		if (isset($_POST['tag'])) {
			$tag = $_POST['tag'];
		}
		if (isset($_POST['radius'])) {
			$radius = $_POST['radius'];
		}
		
		$note = $mysql -> real_escape_string($note);

		$insertnote = "INSERT INTO NOTE VALUES
				      (default, '".$_SESSION['uid']."', '$note', default, now(), '".$_SESSION['lat']."','".$_SESSION['lng']."', '$radius', default)";
		$insertresult1 = $mysql->query($insertnote);
		
		$lookupnid = "select nid from note where content = '$note'";
		$lookupresult1 = $mysql ->query($lookupnid);
		$row1 = $lookupresult1 -> fetch_row();
		
		$lookuptid = "select tid from tag where tagname = '$tag'";
		$lookupresult2 = $mysql ->query($lookuptid);
		$row2 = $lookupresult2 -> fetch_row();
		
		$inserttag = "INSERT INTO NOTE_TAG VALUES ('$row1[0]', '$row2[0]')";
		$insertresult2 = $mysql->query($inserttag);
		
		if ($insertresult1) {
			echo "<script type='text/javascript'> alert('New note successfully posted!') </script>";
			header("refresh: 0; mynotes.php");
		}
		
		else {
			echo "<script type='text/javascript'> alert('There is a problem in your typing') </script>";
			header("refresh: 0; writenote.php");
		}
		
	?>
	
	</div>
	
	</div>
	
</body>

</html>