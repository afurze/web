<?php include 'restricted.php' ?>
<?php include 'restrictedHeader.php' ?>

<form action="processclientlookup.php" mehtod="post">
	<dl>
		<dt>Client ID:</dt><dd><input type="number" size="11" maxlength="11"></dd>
		<dt>First Name:</dt><dd><input type="text"></dd>
		<dt>Last Name:</dt><dd><input type="text>"></dd>
		<dt>Phone Number:</dt><dd><input type="number" size="10" pattern=".{10}"></dd>
	</dl>
</form>

<?php include '../footer.php' ?>