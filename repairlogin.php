<?php include 'header.php' ?>

<div id="login">
	<form action="processlogin.php" method="post">
		<dl>
			<dt>Username:</dt><dd><input type="text" name="username"></dd>
			<dt>Password:</dt><dd><input type="password" name="password"></dd>
		</dl>
		<input id="submit" type="submit" value="Login">
	</form>
</div>

<?php include 'footer.php' ?>