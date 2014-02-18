<?php 
	include 'db_read_connect.php';
	include 'PasswordHash.php';

	// get form info
	$username = $_POST["username"];
	$password = $_POST["password"];

	//TODO: sanitize user input

	// get info from db
	$userinfo = mysqli_query($db, "SELECT * FROM Users WHERE username='" . $username . "';");
	// error check
	if (!$userinfo) {
		echo "Invalid username/password combination!";
	} else {
		// pull pass
		$dbpass = $userinfo["password"];

		// test for validity
		$validUser = validate_password($password, $dbpass);
	}

	include 'db_close.php';
?>

