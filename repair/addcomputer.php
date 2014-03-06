<?php include 'restricted.php' ?>
<?php include 'restrictedHeader.php' ?>

<form action="processnewcomputer.php" method="post">
	<dl>
		<dt>Client ID:</dt><dd><input type="number" required></dd>
		<dt>Manufacturer:</dt><dd><input type="text"></dd>
		<dt>Model:</dt><dd><input type="text"></dd>
		<dt>Serial:</dt><dd><input type="text"></dd>
		<dt>Purchase Date:</dt><dd><input type="date"></dd>
	</dl>
	<input type="submit" value="Add">
</form>

<?php include 'footer.php' ?>