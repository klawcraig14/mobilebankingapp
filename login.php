<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="authenticate.php" method="post">
		<label for="username">Username:</label>
		<input type="text" name="username" id="username" required>
		<label for="password">Password:</label>
		<input type="password" name="password" id="password" required>
		<input type="submit" value="Login">
	</form>
</body>
</html>