<?php

	session_start();
	
	if(!isset($_SESSION['username'])){
		header("Location: login.php");
	}

	error_reporting(0);
	
	include("connection.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>Books Directory</title>
	
	<?php include("css.php"); ?>
	<?php include("js.php"); ?>

</head>
<body>
	
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<ul class="nav navbar-nav">
				<li class="heading"><img src="images/book.png" width="100px" />&nbsp;<strong>Notes</strong> <i class="fa fa-plus-circle" aria-hidden="true"></i></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><img src="images/ad1.png" width="225px" /></li>
				<li><img src="images/ad2.png" width="100px" /></li>
			</ul>
		</div>
	</nav>
	
	<div class="container">
		<nav>
			<ul class="nav nav-tabs">
				<li class="<?php if($_GET['page']==1){ echo 'active'; } ?>"><a href="?page=1">Upload</a></li>
				<li class="<?php if($_GET['page']==2){ echo 'active'; } ?>"><a href="?page=2">Download</a></li>
				<li class="<?php if($_GET['page']==3){ echo 'active'; } ?>"><a href="?page=3">Profile Settings</a></li>
				<li class="navbar-right"><a href="logout.php">Log Out</a></li>
			</ul>
		</nav>
	</div>
		
		<?php 
		
			switch($_GET['page']){
				case 1: include("upload.php");break;
				case 2: include("download.php");break;
				case 3: include("pr_settings.php");break;
			} 
			
		?>
		
</body>
</html>