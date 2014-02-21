<?php include 'restricted.php' ?>
<?php include 'restrictedHeader.php' ?>
<?php include 'db_read_connect.php' ?>

<?php 
	// get lookup parameters
	$clientID = $db->real_escape_string($_POST["clientID"]);
	$fistName = $db->real_escape_string($_POST["firstName"]);
	$lastName = $db->real_escape_string($_POST["lastName"]);
	$phone = $db->real_escape_string($_POST["phone"]);

	// check if enough parameters were provided
	if (!($clientID) && !($firstName && $lastName) && !($phone)) {
		// die
		printf("Invalid search parameters.");
		exit();
	}

	// determine how to construct query
	$query = "SELECT * FROM clients WHERE"; // start construction
	$moreThanOneParam = false; // determine if 'and' is needed
	if ($clientID) {
		// add client ID to query
		$query = $query . " clientID='" . $clientID . "'";
		$moreThanOneParam = true;
	}
	if ($firstName) {
		// add first name
		if ($moreThanOneParam) {
			$query = $query . " AND firstName='" . $firstname . "'";
		} else {
			$query = $query . " " . $firstName;
			$moreThanOneParam = true;
		}
	}
	if ($lastName) {
		// add last name
		if ($moreThanOneParam) {
			$query = $query . " AND lastName='" . $lastName . "'";
		} else {
			$query = $query . " lastName='" . $lastName . "'";
			$moreThanOneParam = true;
		}
	}
	if ($phone) {
		// add phone
		if ($moreThanOneParam) {
			$query = $query . " AND (homePhone='" . $phone . "' OR cellPhone='" . $phone .
				"OR workPhone='" . $phone . "')";
		} else {
			$query = $query . "homePhone='" . $phone . "' OR cellPhone='" . $phone .
				"OR workPhone='" . $phone . "'";
		}
	}

	// submit query
	$queryResult = $db->query($query);

	// check if any results returned
	if ($queryResult->num_rows > 0) {
		// print results
		$rows = array();
		while($row = $queryResult->fetch_array()) {
			$rows[] = $row;
		}
		foreach ($rows as $row) {
			foreach ($row as $key => $value) {
				echo $key . ": " . $value;
			}
			echo '<br />';
		}
	} else {
		echo "No results found.";
	}

	// close results
	$queryResult->close();
?>

<?php include 'db_close.php' ?>
<?php include '../footer.php' ?>