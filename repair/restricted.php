<?php
	include 'sessionHelpers.php';
	
	if(!(active_session() && $_SESSION["username"])) {
		header('Location:repairLogin.php');
		exit();
	}
?>