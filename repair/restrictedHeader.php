<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include 'sessionhelpers.php' ?>
<head>
	<title>Furze: a spiny European shrub</title>
	<script type="text/javascript">
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-40605222-1', 'aspinyshrub.com');
		ga('send', 'pageview');
	</script>
	<link href="../css/reset.css" rel="stylesheet" type="text/css">
	<link href="../css/header.css" rel="stylesheet" type="text/css">
	<link href="../css/footer.css" rel="stylesheet" type="text/css">
	<link href="../css/content.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="../js/header.js"></script>
</head>
<body onload="setCurrent();">
	<div id="title" class="title">
		<h1><span class="defword">Furze</span><span class="def"> [furz]: a spiny European shrub</span></h1>
	</div>

	<div id="navigation" class="navigation">
		<ul>
			<li><a href="/index.php">Home</a></li>
			<li><a href="/about.php">About</a></li>
			<li><a href="/contact.php">Contact</a></li>
            <li><a href="/gallery.php">Gallery</a></li>
			<li><a href="/projects.php">Projects</a></li>
			<li><a href="/changelog.php">Change Log</a></li>
		</ul>
	</div>
	<div id="session_controls">
		<ul>
			<?php 
				if (session_status() === PHP_SESSION_ACTIVE && $_SESSION["username"] != "") {
					echo "<li><a href='logout.php'>Logout</a></li>";
				} else {
					echo "<li><a href='repairlogin.php'>Login</a></li>";
				}
			?>
		</ul>
	</div>

	<div id="content" class="content">