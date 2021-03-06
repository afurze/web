<?php
	include_once 'restricted.php';
	include_once 'restricted_header.php';
	include_once 'db_write_connect.php';
	include_once 'PasswordHash.php';

	// get vars
	$firstName = $db->real_escape_string($_POST["firstName"]);
	$lastName = $db->real_escape_string($_POST["lastName"]);
	$homePhone = $db->real_escape_string($_POST["homePhone"]);
	$cellPhone = $db->real_escape_string($_POST["cellPhone"]);
	$workPhone = $db->real_escape_string($_POST["workPhone"]);
	$address =$db->real_escape_string($_POST["address"]);
	$city = $db->real_escape_string($_POST["city"]);
	$state = $db->real_escape_string($_POST["state"]);
	$zip = $db->real_escape_string($_POST["zip"]);
	$email = $db->real_escape_string($_POST["email"]);
	$username = $db->real_escape_string ($_POST["username"]);
	$password = $db->real_escape_string($_POST["password"]);
	$confirmPassword = $db->real_escape_string($_POST["confirmPassword"]);

	$error = false;
	// user does not exist
	$dbuser = $db->query("SELECT username FROM users WHERE username = '".$username."';");
	if ($dbuser->num_rows >= 1) {
		printf("That username is already in use.");
		$error = true;
	}
	// passwords match
	if (!($password === $confirmPassword)) {
		printf("The passwords you entered did not match.");
		$error = true;
	}
	// client supplied at least one phone number
	if (!($cellPhone || $workPhone || $homePhone)) {
		printf("You must supply at least one valid phone number.");
		$error = true;
	} else {
		if($cellPhone) {
			$existingClient = $db->query("SELECT * FROM clients WHERE cellPhone = '".$cellPhone."';");
			if ($existingClient->num_rows >= 1) {
				$existingClient->close();
				printf("Cell phone number already in use.");
				$error = true;
			}
		}
		if($homePhone) {
			$existingClient = $db->query("SELECT * FROM clients WHERE homePhone = '".$homePhone."';");
			if ($existingClient->num_rows >= 1) {
				$existingClient->close();
				printf("Home phone number already in use.");
				$error = true;
			}
		}
		if($workPhone) {
			$existingClient = $db->query("SELECT * FROM clients WHERE workPhone = '".$workPhone."';");
			if ($existingClient->num_rows >= 1) {
				$existingClient->close();
				printf("Work phone number already in use.");
				$error = true;
			}
		}
	}

	// register new client
	if (!$error) {
		$newClient = $db->query("INSERT INTO clients (
			firstName, 
			lastName, 
			homePhone, 
			cellPhone, 
			workPhone, 
			address, 
			email, 
			city, 
			state, 
			zip) VALUES (
			'".$firstName."',
			'".$lastName."', 
			'".$homePhone."', 
			'".$cellPhone."', 
			'".$workPhone."', 
			'".$address."', 
			'".$email."', 
			'".$city."', 
			'".$state."', 
			'".$zip."'
			);"
		);
		if ($db->errno) {
			printf($db->error);
		}

		$newClient = $db->query("SELECT clientID FROM clients WHERE 
			homePhone = '".$homePhone."' AND 
			cellPhone = '".$cellPhone."' AND 
			workPhone = '".$workPhone."';");
		$newClientID = $newClient->fetch_row();
		$newClientID = $newClientID[0];
		$newClient->close();

		// register new user
		$newUser = $db->query("INSERT INTO users (
			clientID, 
			username, 
			hash) VALUES (
			'".$newClientID."',
			'".$username."',
			'".create_hash($password)."');"
		);
		if ($db->errno) {
			printf($db->error);
		}
	} else {
		printf("Registration successful!");
	}
	include_once '../footer.php';
?>