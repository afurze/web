<?php
	include 'sessionhelpers.php';

	new_session("", "");

	header('Location:repairlogin.php');
	exit();
?>