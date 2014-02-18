<?php
	include 'db_write_connect.php';
	include 'PasswordHash.php';

	// check db
	if (!mysqli_connect_errno()) {
		// get vars
		$firstName = $_POST["firstName"];
		$lastName = $_POST["lastName"];
		$homePhone = $_POST["homePhone"];
		$cellPhone = $_POST["cellPhone"];
		$workPhone = $_POST["workPhone"];
		$address = $_POST["address"];
		$city = $_POST["city"];
		$state = $_POST["state"];
		$zip = $_POST["zip"];
		$email = $_POST["email"];

		//TODO: sanitize

		//TODO: check for existing user

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
	}
?>