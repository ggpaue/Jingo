<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
	<style type="text/css">
		.interface .content .rightbutton {
			float: right;
			margin-top: -145px;
			margin-right: 5px;
			width: 60px;
			height: 28px;
			background: rgba(0, 105, 170, 0.9);
			font-weight: 500px;
			color : rgba(251, 251, 251);
			text-align: center;
			border: 1px soild #888888;
			border-radius: 3px;
		}
	</style>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/signupstyle.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src=".../js/jquery-1.9.1.min.js"></script>
</head>

<body>
	
	<div id="wrapper">
		<div class = "interface">
			<?php 
				include 'config.php';
			?>
			<div class="header">
				<h4>New Note</h4>
				<form>
					<input type = "button" value = "Cancel" class = "leftbutton" onclick='location.href = "mynotes.php"'/>
				</form>
			</div>
			
			<div class="content">
				<form action="noteadded.php" method="post">
					<textarea name='note' placeholder="Write new note here..." onfocus="this.value=''"></textarea> 
					<input type="submit" value="Post" class="rightbutton" onclick='location.href="noteadded.php"'/>
			    	<input name="Tag" type="text" class="input" placeholder="Tag (for example: food;deal)" onfocus="this.value=''" />
				    <br/>				    		
				    <input name = visibility type="text" placeholder="Visibility" class="shortinput2"/>
				    <input name = radius type="text" placeholder="Radius" class="shortinput1"/>
				</form>
			</div>
		</div>
	</div>
</body>

</html>