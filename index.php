<!DOCTYPE html>
<html>
<head>
	<title>home page</title>
</head>
<body>
<div id="info">
	<div>
		<form method="post" action="login.php">
			<label>Username</label>
			<input type="text" name="uname" placeholder="name">
			<label>Password</label>
			<input type="text" name="pass" placeholder="password">
			<button type="submit">login</button>
		</form>
	</div>
	<div class="">
		<form method="post" action="signup.php">
			<label>Usename</label>
			<input type="text" name="uname" placeholder="name">
			<label>email</label>
			<input type="text" name="Email" placeholder="email">
			<label>Password</label>
			<input type="text" name="Password" placeholder="password">
			<button type="submit">signup</button>
		</form>
	</div>
</div>
</body>
</html>