<?php include_once 'restricted.php' ?>
<?php include_once 'restricted_header.php' ?>

<form action="process_computer_lookup.php" method="post">
	<dl>
		<dt>Client ID:</dt>
			<dd><input type="number" name="clientID" size="11" maxlength="11" required></dd>
	</dl>
	<input type="Submit" value="Search">
</form>

<?php include_once '../footer.php' ?>