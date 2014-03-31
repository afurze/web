<?php
	include_once 'session_helpers.php';

	new_session("", "");

	header('Location:repair_login.php');
	exit();
?>