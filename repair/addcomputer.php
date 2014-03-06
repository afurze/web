<?php include 'restricted.php' ?>
<?php include 'restrictedHeader.php' ?>

<form action="processnewcomputer.php" method="post">
	<dl>
		<dt>Client ID:</dt><dd><input type="number" name="clientID" required></dd>
		<dt>Manufacturer:</dt><dd><input type="text" name="manufacturer" required></dd>
		<dt>Model:</dt><dd><input type="text" name="model" required></dd>
		<dt>Serial:</dt><dd><input type="text" name="serial" required></dd>
		<dt>Purchase Date:</dt><dd><input type="date" name="purchaseDate" required></dd>
	</dl>
	<input type="submit" value="Add">
</form>

<?php include 'footer.php' ?>