<?php
	include 'sessionHelpers.php';

	new_session("", "");

	header('Location:repairlogin.php');
	exit();
?>