<?php 
	include_once 'db_read_connect.php';
	include_once 'PasswordHash.php';
	include_once 'session_helpers.php';

	// get form info
	$username = $db->real_escape_string($_POST["username"]);
	$password = $db->real_escape_string($_POST["password"]);

	// get info from db
	$userinfo = $db->query("SELECT * FROM users WHERE username='" . $username . "';");
	// error check
	if (!$userinfo) {
		new_session("", "");
		$_SESSION["errorMessage"] = "Invalid username/password combination!";
	} else {
		// pull pass
		$userinfo = $userinfo->fetch_row();
		$dbpass = $userinfo[3];

		// test for validity
		if(validate_password($password, $dbpass)) {
			new_session($username, $userinfo[4]);
		} else {
			new_session("", "");
			$_SESSION["errorMessage"] = "Invalid username/password combination!";
		}
	}

	include 'db_close.php';

	header('Location:index.php');
	exit();
?>

