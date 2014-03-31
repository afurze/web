<?php include 'restricted.php' ?>
<?php include 'restrictedHeader.php' ?>
<form action='processNewTicket.php' method="post">
	<dl>
		<dt>Client ID:</dt><dd><input type="number" name="clientID" required></dd>
		<dt>Purpose:</dt>
		<dd>
			<select>
				<option value="">Select one...</option>
				<option value="Diag">Diagnostic</option>
				<option value="HW">Hardware</option>
				<option value="Virus">Infection</option>
				<option value="SW">Software</option>
				<option value="PW">Password Reset</option>
				<option value="OSR">OS Restore</option>
				<option value="DB">Data Backup</option>
			</select>
		</dd>
		<dt>Notes:</dt>
		<dd>
			<textarea name="notes" rows="5" cols="50"></textarea>
		</dd>
	</dl>
	<input type="submit" value="Add">
</form>

<?php include '../footer.php' ?>