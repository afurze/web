<?php
	include 'header.php';
	include 'db_write_connect.php';

	// get vars
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$homePhone = $_POST["homePhone"];
	$cellPhone = $_POST["cellPhone"];
	$workPhone = $_POST["workPhone"];
	$address = $_POST["address"];
	$city = $_POST["city"];
	$state = $_POST["state"].value;
	$zip = $_POST["zip"];
	$email = $_POST["email"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$confirmPassword = $_POST["confirmPassword"];

	//TODO: sanitize

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