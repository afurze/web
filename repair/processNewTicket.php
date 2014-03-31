<?php
	include_once 'restricted.php';
	include_once 'restrictedHeader.php';
	include_once 'db_write_connect.php';

	// get vars
	$clientID = $db->real_escape_string($_POST["clientID"]);
	$purpose = $db->real_escape_string($_POST["purpose"].value);
	$notes = $db->real_escape_string($_POST["notes"]);

	// create vars
	$createdDate = date('Y-m-d');
	$status = "AwaitingStart";

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
		$query = "INSERT INTO tickets (
			clientID,
			createdDate,
			status,
			notes,
			purpose) VALUES (
			'" . $clientID . "',
			'" . $createdDate . "',
			'" . $status . "',
			'" . $notes . "',
			'" . $purpose . "',
			);";
		$newTicket = $db->query($query);
		if ($db->errno) {
			printf($db->error);
		} else {
			printf("Successfully created new ticket.");
		}
	}

	include_once 'db_close.php';
	include_once '../footer.php';
?>