<?php include_once 'restricted.php' ?>
<?php include_once 'restricted_header.php' ?>
<?php include_once 'db_read_connect.php' ?>

<div id="repairnav" class="repairnav">
	<?php
		// create navigation
		printf("<h2>Welcome ".$_SESSION["username"]."</h2>");
		printf("<ul>");
		if($_SESSION["isAdmin"] == true) {
			printf("<h3>Client Activities</h3>");
			printf("<li><a href='add_client.php'>Add Client</a></li>");
			printf("<li><a href='add_computer.php'>Add Computer</a></li>");
			printf("<li><a href='add_ticket.php'>Add Ticket</a></li>");
			printf("<li><a href='lookup_client.php'>Lookup Client</a></li>");
			printf("<li><a href='lookup_computer.php'>Lookup Computer</a></li>");
			printf("<li><a href='lookup_ticket.php'>Lookup Ticket</a></li>");

			printf("<h3>System Activities</h3>");
			printf("<li><a href='add_charge.php'>Add Charge</a></li>");
			printf("<li><a href='add_user.php'>Add User</a></li>");
			printf("<li><a href='view_charges.php'>View Charges</a></li>");
			printf("<li><a href='view_users.php'>View Users</a></li>");
		} else {
			printf("<li><a href='my_tickets.php'>My Tickets</a></li>");
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
<?php include_once 'db_close.php' ?>
<?php include_once '../footer.php' ?>