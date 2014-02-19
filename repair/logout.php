<?php
	include 'sessionhelpers.php';

	new_session("", "");

	header('Location:index.php');
	exit();
?>