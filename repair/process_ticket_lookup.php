<?php include_once 'restricted.php' ?>
<?php include_once 'restricted_header.php' ?>
<?php include_once 'db_read_connect.php' ?>

<?php
	// get lookup parameters
	$clientID = $db->real_escape_string($_POST["clientID"]);

	// verify client id was provided
	if (!$clientID) {
		// die
		printf("Invalid search parameters.");
		exit();
	}

	// create query
	$query = "SELECT * FROM tickets WHERE clientID='" . $clientID . "'";

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
					if ($vlaue === "0") { // for non-empty values
						print("<dt>" . $key . "</dt><dd style='clear:both;'></dd>");
					} elseif ($value === "") { // check for bad values
						printf("<dt>" . $key . "</dt><dd style='clear:both'></dd>");
					} else {
						printf("<dt>" . $key . "</dt><dd>" . $value . "</dd>");
					}
				}
			}
		}
		print('</dl');
	} else {
		echo "No results found.";
	}

	// close results
	$queryResult->close();
?>

<?php include_once 'db_close.php' ?>
<?php include_once '../footer.php' ?>