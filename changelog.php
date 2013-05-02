<?php include 'header.php' ?>

<h2>Changelog</h2>

<?php 
	$curl = curl_init("https://api.github.com/repos/afurze/web/commits");
	curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
	curl_exec($curl);

	if (!curl_errno($curl)) {
		$info = curl_getinfo($curl);

		print $info;
	}
?>

<?php include 'footer.php' ?>