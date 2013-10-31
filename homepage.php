<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/signupstyle.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/jquery.js"></script>
</head>

<body>
	<div id = "wrapper">
		<div class="interface">
		
			<?php
				include 'config.php';
				session_start();
				$lat="";
				$lng="";
			?>
			
			<div class="header">
				<h3>jingo</h3>
				<form>
					<input type="button" value="New" class="leftbutton" onclick='location.href="writenote.php"'/>
				</form>
				<form action="signinpage.php">
					<input type="button" value="Log out" class="rightbutton" onclick='location.href="goodbye.php"'/>
				</form>
			</div>
	
			<div class = 'secondheader'>
				<form method="get" action="searchresult.php" id="search">			
	  				<input name="keywords" type="text" placeholder="e.g. lunch, shopping" />
					<input type = "submit" value = 'Go' class="searchbutton" />
				</form>
			</div>
			
			<div class = 'content'>
				<ul>
				 	<li><a href="nearbynotes.php"><img src = "images/icons/icons-gray/74-location@2x.png" height = '40' width = '40'></img><br/>Nearby<br/></a></li>
				    <li><a href="deal.php"><img src = "images/icons/icons-gray/172-pricetag@2x.png" height = '40' width = '50'></img><br/>Deals<br/></a></li>
				    <li><a href="mapview.php"><img src = "images/icons/icons-gray/103-map@2x.png" height = '40' width = '46'></img><br/>Map<br/></a></li>
				    <li><a href="friendslist.php"><img src = "images/icons/icons-gray/112-group@2x.png" height = '40' width = '60'></img><br/>Friends<br/></a></li>
				    <li><a href="#"><img src = "images/icons/icons-gray/09-chat-2@2x.png" height = '40' width = '45'></img><br/>Chat<br/></a></li>
				    <li><a href="mynotes.php"><img src = "images/icons/icons-gray/179-notepad@2x.png" height = '40' width = '35'></img><br/>My posts<br/></a></li>
				    <li><a href="profiledisplay.php"><img src = "images/icons/icons-gray/145-persondot@2x.png" height = '40' width = '40'></img><br/>About me<br/></a></li>
				    <li><a href="#"><img src = "images/icons/icons-gray/58-bookmark@2x.png" height = '40' width = '32'></img><br/>Bookmarks<br/></a></li>
				    <li><a href="settings.php"><img src = "images/icons/icons-gray/20-gear-2@2x.png" height = '40' width = '38'></img><br/>Setting<br/></a></li>
				</ul>
			</div>
				
			<div class="bottom">
				<ul>
				 	<li><a href="homepage.php"><img src = "images/mini/mini-white/38-house@2x.png" height="25" width="28"></img><br/>Home<br/></a></li>
				    <li><a href="nearbynotes.php"><img src = "images/icons/icons-white/74-location@2x.png" height="25" width="25"></img><br/>Nearby<br/></a></li>
				    <li><a href="mapview.php"><img src = "images/icons/icons-white/07-map-marker@2x.png" height="25" width="17"></img><br/>Location<br/></a></li>
				    <li><a href="profiledisplay.php"><img src = "images/icons/icons-white/253-person@2x.png" height="25" width="27"></img><br/>Me<br/></a></li>
				    <li><a href="settings.php"><img src = "images/icons/icons-white/19-gear@2x.png" height="25" width="25"></img><br/>Setting<br/></a></li>
				</ul>
			</div>
			
		</div>
	</div>
</body>
</html>