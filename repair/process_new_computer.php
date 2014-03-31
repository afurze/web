<?php include_once 'restricted.php' ?>
<?php include_once 'restricted_header.php' ?>
<?php include_once 'db_write_connect.php' ?>

<?php

	// get vars
	$clientID = $db->real_escape_string($_POST["clientID"]);
	$manufacturer = $db->real_escape_string($_POST["manufacturer"]);
	$model = $db->real_escape_string($_POST["model"]);
	$serial = $db->real_escape_string($_POST["serial"]);
	$purchaseDate = $db->real_escape_string($_POST["purchaseDate"]);
	// format date
	$purchaseDate = date('Y-m-d', strtotime(str_replace('-', '/', $purchaseDate)));

	// check that a valid client ID is provided
	$query = "SELECT * FROM clients WHERE clientID='" . $clientID . "'";

	// submit query
	$queryResult = $db->query($query);

	// check for results
	if ($queryResult->num_rows < 1) {
		// if no results
		printf("No such client.");
		$queryResult->close();
	} else {
		// else insert entry
		$query = "INSERT INTO computers (
			clientID,
			manufacturer,
			model,
			serial,
			purchaseDate) VALUES (
			'" . $clientID . "',
			'" . $manufacturer . "',
			'" . $model . "',
			'" . $serial . "',
			'" . $purchaseDate . "'
			);";
		$newComputer = $db->query($query);
		if ($db->errno) {
			printf($db->error);
		} else {
			printf("Successfully registered new computer.");
		}
	}
?>
<? include_once 'db_close.php' ?>
<? include_once '../footer.php' ?>