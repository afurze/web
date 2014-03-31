<?php include 'restricted_header.php' ?>
<?php 
	if (session_status() === PHP_SESSION_ACTIVE && $_SESSION["username"] != "") {
		printf('<p>Already logged in!</p>');
	} elseif (session_status() === PHP_SESSION_ACTIVE && $_SESSION["errorMessage"] != "") {
		printf('<p class="error">'.$_SESSION["errorMessage"].'</p>');
		printf('<div id="login">');
			printf('<form action="process_login.php" method="post">');
				printf('<dl>');
					printf('<dt>Username:</dt><dd><input type="text" name="username"></dd>');
					printf('<dt>Password:</dt><dd><input type="password" name="password"></dd>');
				printf('</dl>');
				printf('<input id="submit" type="submit" value="Login">');
			printf('</form>');
		printf('</div>');
	} else {
		printf('<div id="login">');
			printf('<form action="process_login.php" method="post">');
				printf('<dl>');
					printf('<dt>Username:</dt><dd><input type="text" name="username"></dd>');
					printf('<dt>Password:</dt><dd><input type="password" name="password"></dd>');
				printf('</dl>');
				printf('<input id="submit" type="submit" value="Login">');
			printf('</form>');
		printf('</div>');
	}
?>

<?php include '../footer.php' ?>