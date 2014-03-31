<?php
	include_once 'session_helpers.php';
	
	if(!(active_session() && $_SESSION["username"])) {
		header('Location:repair_login.php');
		exit();
	}
?>