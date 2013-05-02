<?php include 'header.php' ?>

<h2>Changelog</h2>

<?php 
	$response = http_get("http://github.com/repos/afurze/web/commits");
	if ($resposne) {
		print $response;
	}
?>

<?php include 'footer.php' ?>