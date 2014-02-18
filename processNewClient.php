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

	//TODO: sanitize

	//TODO: error checking

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