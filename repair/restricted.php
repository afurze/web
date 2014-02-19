<?php
	include 'sessionhelpers.php';
	session_start();
	
	if(!(active_session() && $_SESSION["username"])) {
		header('Location:repairlogin.php');
		exit();
	}
?>