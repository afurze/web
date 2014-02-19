<?php 
	include 'db_read_connect.php';
	include 'PasswordHash.php';
	include 'sessionhelpers.php';

	// get form info
	$username = mysqli_real_escape_string($db, $_POST["username"]);
	$password = mysqli_real_escape_string($db, $_POST["password"]);

	// get info from db
	$userinfo = mysqli_query($db, "SELECT * FROM Users WHERE username='" . $username . "';");
	// error check
	if (!$userinfo) {
		echo "Invalid username/password combination!";
	} else {
		// pull pass
		$dbpass = $userinfo["password"];

		// test for validity
		if(validate_password($password, $dbpass)) {
			new_session($username, $userinfo["isAdmin"]);
		} else {
			echo "Invalid username/password combination!";
		}
	}

	include 'db_close.php';
?>

