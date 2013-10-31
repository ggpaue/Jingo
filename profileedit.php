<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/signupstyle.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src=".../js/jquery-1.9.1.min.js"></script>
	<style type="text/css">
		.interface .content .rightbutton {
			float: right;
			margin-top: -217px;
			margin-right: 5px;
			width: 60px;
			height: 28px;
			background: rgba(0, 105, 170, 0.9);
			font-family: Calibri;
			font-size: 14px;
			font-weight: 700px;
			color : #f8f8f8;
			text-align: center;
			border: 1px soild #888888;
			border-radius: 3px;
		}
		.interface .content .rightbutton:hover{
			background: #F9C549;
			color: #585858;
		}
	</style>
</head>

<body>
	<?php
		include 'config.php';
		session_start();
	?>
	
	<div id="wrapper">
		<div class = "interface">
			<div class="header">
				<h4>Edit Profile</h4>
				<form>
					<input type = "button" value = "Cancel" class = "leftbutton" onclick='location.href = "profiledisplay.php"'/>
				</form>
			</div>
			<div class="content">
				<form action="profileupdated.php" method = 'post'>
					<input name="firstname" type="text" class="shortinput1" 	placeholder="Firstname"	onfocus="this.value=''" />
					<input name="lastname" 	type="text" class="shortinput2" 	placeholder="Lastname" 	onfocus="this.value=''" />
			    	<input name="birthday" 	type="text" class="input"			placeholder="Birthday(YYYY-MM-DD)" onfocus="this.value=''"/>
			    	<input name="phone" 	type="text" class="input" 			placeholder="Phone" 	onfocus="this.value=''" />
			    	<input name="gender" 	type="text" class="shortinput1" 	placeholder="Gender(M or F)" 	onfocus="this.value=''" />
					<input name="category" 	type="text" class="shortinput2" 	placeholder="Category" 	onfocus="this.value=''" />
					<input type="submit" value="Save" class="rightbutton" onclick='location.href="profileupdated.php"'/>
				</form>
			</div>

		</div>
	</div>
</body>

</html>
	