<?php include_once 'restricted.php' ?>
<?php include_once 'restricted_header.php' ?>
<?php include_once 'db_read_connect.php' ?>

<?php 
	// get lookup parameters
	$clientID = $db->real_escape_string($_POST["clientID"]);
	$fistName = $db->real_escape_string($_POST["firstName"]);
	$lastName = $db->real_escape_string($_POST["lastName"]);
	$phone = $db->real_escape_string($_POST["phone"]);

	// check if enough parameters were provided
	if (!($clientID) && !($firstName === "" && $lastName === "") && !($phone)) {
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
			$query = $query . " homePhone='" . $phone . "' OR cellPhone='" . $phone .
				"' OR workPhone='" . $phone . "'";
		}
	}

	// submit query
	$queryResult = $db->query($query);

	// check if any results returned
	if ($queryResult->num_rows > 0) {
		// print results
		printf('<dl class="searchResult">');
		$rows = array();
		while($row = $queryResult->fetch_array()) {
			$rows[] = $row;
		}
		foreach ($rows as $row) {
			foreach ($row as $key => $value) {
				if (!(gettype($key) === "integer")) { // check for duplicate pairs
					if ($value === "0") { // for non-empty values
						printf("<dt>" . $key . "</dt><dd style='clear:both;'></dd>");
					} elseif ($value === "") { // check for bad values
						printf("<dt>" . $key . "</dt><dd style='clear:both'></dd>");
					} else {
						if ($key === "clientID") $clientID = $value;
						printf("<dt>" . $key . "</dt><dd>" . $value . "</dd>");
					}
				}
			}
		}
		// add computer lookup
		printf('<form action="process_computer_lookup.php" method="post">');
		printf('<input type="hidden" name="clientID" value="' . $clientID . '">');
		printf('<input type="Submit" value="Lookup Computers">');
		printf('</form>');

		// add ticket lookup
		printf('<form action="process_ticket_lookup.php" method="post">');
		printf('<input type="hidden" name="clientID" value="' . $clientID . '">');
		printf('<input type="Submit" value="Lookup Computers">');
		printf('</form>');

		printf('</dl>');
	} else {
		echo "No results found.";
	}

	// close results
	$queryResult->close();
?>

<?php include_once 'db_close.php' ?>
<?php include_once '../footer.php' ?>