<?php include 'header.php' ?>

<h2>Changelog</h2>

<div class="gitlog lefthalf">
	<table>
		<?php 
			// construct curl request
			$curl = curl_init("https://api.github.com/repos/afurze/web/commits");
			curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0");
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			$info = curl_exec($curl);

			$info = json_decode($info, true);

			// error check and result print
			if (!curl_errno($curl)) {
				for ($i = 0; $i < 10; $i++) {
					print "<tr class='sha'><td class='label'>SHA</td><td class='value'><a href='https://api.github.com/repos/afurze/web/git/commits/{$info[$i]['sha']}'>{$info[$i]['sha']}</td></a></tr>";
					print "<tr class='data'><td class='label'>Author</td><td class='value'>{$info[$i]['commit']['author']['name']}</td></tr>";
					print "<tr class='data'><td class='label'>Date</td><td class='value'>{$info[$i]['commit']['author']['date']}</td></tr>";
					print "<tr class='data'><td class='label'>Message</td><td class='value'>{$info[$i]['commit']['message']}</td></tr>";
				}		
			}
		?>
	</table>
</div>

<div class="righthalf">
	<p>These are the past ten commits for this site, not really worth
		looking at, just wanted to see if I could make it work</p>
</div>

<?php include 'footer.php' ?>