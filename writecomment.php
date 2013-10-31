<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/signupstyle.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/jquery.js"></script>

</head>

<body>
	<div id="wrapper">
		<div class="interface">
		
			<?php
				include 'config.php';
				session_start();
				$nid = '';
				if (isset($_GET['nid'])) {
					$nid = $_GET['nid'];
				}			
			?>
			
			<div class="header">
				<h4>Add comment</h4>
				<form>
					<input type = "button" value = "Cancel" class = "leftbutton" onclick = "history.go(-1);"/>
				</form>
			</div>
			
			<div class="content">
				<form action="commentadded.php" method="get">
					<textarea name='comment' placeholder="Write comment here..." onfocus="this.value=''"></textarea> 
					<input type="submit" value="Post" class="rightbutton" onclick='location.href="commentadded.php?nid=<?php echo $nid;?> "'/>
					<h4>Rating</h4>	
					<div class='styled-select'>			
						<select name = 'rating'>
							  <option value="5">5 stars</option>
							  <option value="4">4 stars</option>
							  <option value="3">3 stars</option>
							  <option value="2">2 stars</option>
							  <option value="1">1 star</option>
						</select>	
					</div>	
				</form>
			</div>
		</div>
	</div>
</body>

</html>
				