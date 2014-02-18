<?php include 'header.php' ?>
<form action="processNewClient.php" method="post">
	<dl>
		<dt>First Name:</dt><dd><input type="text" name="firstName" required></dd>
		<dt>Last Name:</dt><dd><input type="text" name="lastName" required></dd>
		<dt>Home Phone:</dt><dd><input type="tel" name="homePhone"></dd>
		<dt>Cell Phone:</dt><dd><input type="tel" name="cellPhone"></dd>
		<dt>Work Phone:</dt><dd><input type="tel" name="workPhone"></dd>
		<dt>Email:</dt><dd><input type="email" name="email"></dd>
		<dt>Address:</dt><dd><input type="text" name="address"></dd>
		<dt>City:</dt><dd><input type="text" name="city"></dd>
		<dt>State:</dt>
		<dd>
			<select>
				<option value="">Select one...</option>
				<option value="AL">Alabama</option>
				<option value="AK">Alaska</option>
				<option value="AZ">Arizona</option>
				<option value="AR">Arkansas</option>
				<option value="CA">California</option>
				<option value="CO">Colorado</option>
				<option value="CT">Connecticut</option>
				<option value="DE">Delaware</option>
				<option value="DC">District of Columbia</option>
				<option value="FL">Florida</option>
				<option value="GA">Georgia</option>
				<option value="HI">Hawaii</option>
				<option value="ID">Idaho</option>
				<option value="IL">Illinois</option>
				<option value="IN">Indiana</option>
				<option value="IA">Iowa</option>
				<option value="KS">Kansas</option>
				<option value="KY">Kentucky</option>
				<option value="LA">Louisiana</option>
				<option value="ME">Maine</option>
				<option value="MD">Maryland</option>
				<option value="MA">Massachusetts</option>
				<option value="MI">Michigan</option>
				<option value="MN">Minnesota</option>
				<option value="MS">Mississippi</option>
				<option value="MO">Missouri</option>
				<option value="MT">Montana</option>
				<option value="NE">Nebraska</option>
				<option value="NV">Nevada</option>
				<option value="NH">New Hampshire</option>
				<option value="NJ">New Jersey</option>
				<option value="NM">New Mexico</option>
				<option value="NY">New York</option>
				<option value="NC">North Carolina</option>
				<option value="ND">North Dakota</option>
				<option value="OH">Ohio</option>
				<option value="OK">Oklahoma</option>
				<option value="OR">Oregon</option>
				<option value="PA">Pennsylvania</option>
				<option value="RI">Rhode Island</option>
				<option value="SC">South Carolina</option>
				<option value="SD">South Dakota</option>
				<option value="TN">Tennessee</option>
				<option value="TX">Texas</option>
				<option value="UT">Utah</option>
				<option value="VT">Vermont</option>
				<option value="VA">Virginia</option>
				<option value="WA">Washington</option>
				<option value="WV">West Virginia</option>
				<option value="WI">Wisconsin</option>
				<option value="WY">Wyoming</option>
			</select>
		</dd>
		<dt>Zip Code:</dt><dd><input type="number" size="5" maxlength="5"></dd>
		<dt>Username:</dt><dd><input type="text" name="username" required></dd>
		<dt>Password:</dt><dd><input type="password" name="password" required></dd>
		<dt>Confirm Password:</dt><dd><input type="password" name="confirmPassword" required></dd>
	</dl>
	<input type="submit" value="Register">
</form>

<?php include 'footer.php' ?>