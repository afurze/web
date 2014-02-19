<?php
	include 'sessionhelpers.php';
	
	if(!(active_session() && $_SESSION["username"])) {
		header('Location:repairlogin.php');
	}
?>