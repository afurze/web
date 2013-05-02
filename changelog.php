<?php include 'header.php' ?>

<h2>Changelog</h2>

<?php 
	// construct curl request
	$curl = curl_init("https://api.github.com/repos/afurze/web/commits");
	curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
	curl_exec($curl);

	// error check and result print
	if (!curl_errno($curl)) {
		$info = curl_getinfo($curl);

		for ($i = 0; $i < 5; $i++) {
			print $info[i]["sha"];
		}
	}
?>

<?php include 'footer.php' ?>