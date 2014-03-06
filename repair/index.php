<?php include 'restricted.php' ?>
<?php include 'restrictedHeader.php' ?>
<?php include 'db_read_connect.php' ?>

<div id="repairnav" class="repairnav">
	<?php
		// create navigation
		printf("<h2>Welcome ".$_SESSION["username"]."</h2>");
		printf("<ul>");
		if($_SESSION["isAdmin"] == true) {
			printf("<li><a href='addclient.php'>Add Client</a></li>");
			printf("<li><a href='lookupclient.php'>Lookup Client</a></li>");
			printf("<li><a href='lookupticket.php>Lookup Ticket</a></li>");
			printf("<li><a href='addcomputer.php'>Add Computer</a></li>");
		} else {
			printf("<li><a href='mytickets.php'>My Tickets</a></li>");
		}
		printf("</ul>");

		// list appropriate tickets
		print("<ul>");
		if($_SESSION["isAdmin"] == true) {
			// TODO: all open tickets
			// TODO: list all open tickets
		} else {
			// TODO: get client tickets
			// TODO: list client tickets
		}
	?>
</div>
<?php include 'db_close.php' ?>
<?php include '../footer.php' ?>