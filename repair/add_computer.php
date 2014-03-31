<?php include_once 'restricted.php' ?>
<?php include_once 'restricted_header.php' ?>

<form action="process_new_computer.php" method="post">
	<dl>
		<dt>Client ID:</dt><dd><input type="number" name="clientID" required></dd>
		<dt>Manufacturer:</dt><dd><input type="text" name="manufacturer" required></dd>
		<dt>Model:</dt><dd><input type="text" name="model" required></dd>
		<dt>Serial:</dt><dd><input type="text" name="serial" required></dd>
		<dt>Purchase Date:</dt><dd><input type="date" name="purchaseDate" required></dd>
	</dl>
	<input type="submit" value="Add">
</form>

<?php include_once '../footer.php' ?>