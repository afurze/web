<?php 
	include '/repair/db_read_connect.php';
	include '/repair/PasswordHash.php';
	include '/repair/sessionhelpers.php';

	// get form info
	$username = $db->real_escape_string($_POST["username"]);
	$password = $db->real_escape_string($_POST["password"]);

	// get info from db
	$userinfo = $db->query("SELECT * FROM users WHERE username='" . $username . "';");
	// error check
	if (!$userinfo) {
		printf("Invalid username/password combination!");
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

	include '/repair/db_close.php';

	header('Location:/repair/repair.php');
?>

