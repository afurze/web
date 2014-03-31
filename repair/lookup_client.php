<?php include_once 'restricted.php' ?>
<?php include_once 'restricted_header.php' ?>

<form action="process_client_lookup.php" method="post">
	<dl>
		<dt>Client ID:</dt><dd><input type="number" name="clientID" size="11" maxlength="11"></dd>
		<dt>First Name:</dt><dd><input type="text" name="firstName"></dd>
		<dt>Last Name:</dt><dd><input type="text" name="lastName"></dd>
		<dt>Phone Number:</dt><dd><input type="number" name="phone" size="10" pattern=".{10}"></dd>
	</dl>
	<input type="Submit" value="Search">
</form>

<?php include_once '../footer.php' ?>