<?php
	include 'header.php';
	include 'db_write_connect.php';

	// get vars
	$firstName = mysqli_real_escape_string($_POST["firstName"]);
	$lastName = mysqli_real_escape_string($_POST["lastName"]);
	$homePhone = mysqli_real_escape_string($_POST["homePhone"]);
	$cellPhone = mysqli_real_escape_string($_POST["cellPhone"]);
	$workPhone = mysqli_real_escape_string($_POST["workPhone"]);
	$address = mysqli_real_escape_string($_POST["address"]);
	$city = mysqli_real_escape_string($_POST["city"]);
	$state = mysqli_real_escape_string($_POST["state"].value);
	$zip = mysqli_real_escape_string($_POST["zip"]);
	$email = mysqli_real_escape_string($_POST["email"]);
	$username = mysqli_real_escape_string($_POST["username"]);
	$password = mysqli_real_escape_string($_POST["password"]);
	$confirmPassword = mysqli_real_escape_string($_POST["confirmPassword"]);

	//TODO: error checking
	// user does not exist
	$dbuser = mysqli_query($db, "SELECT username FROM users WHERE username = ".$username);
	if ($dbuser) {
		echo "That username is already in use.";
	}
	// passwords match
	if (!($password === $confirmPassword)) {
		echo "The passwords you entered did not match.";
	}
	// client supplied at least one phone number
	if (!($cellPhone || $workPhone || $homePhone)) {
		echo "You must supply at least one valid phone number.";
	}
	//TODO: client does not exist

	//TODO: check for existing user
	$existingUser = mysqli_query($db, "SELECT * FROM clients WHERE ")

	// register new user
	mysqli_query($db, "INSERT INTO clients (firstName, lastName, homePhone, cellPhone, 
		workPhone, address, email, city, state, zip) VALUES ('".$firstName."', '".$lastName
		."', '".$homePhone."', '".$cellPhone."', '".$workPhone."', '".$address."', '".
		$email."', '".$city."', '".$state."', '".$zip."')"
	);

	/**echo "INSERT INTO clients (firstName, lastName, homePhone, cellPhone, 
		workPhone, address, email, city, state, zip) VALUES ('".$firstName."', '".$lastName
		."', '".$homePhone."', '".$cellPhone."', '".$workPhone."', '".$address."', '".
		$email."', '".$city."', '".$state."', '".$zip."')";**/
	
	include 'footer.php';
?>