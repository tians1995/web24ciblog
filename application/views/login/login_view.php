<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<form action='verifylogin' method="POST">
<table style="margin:20px auto;">
	<tr>
		<td><label for="email">Email:</label></td>
		<td><input type="email" id="email" name="email"></td>
	</tr>
	<tr>
		<td><label for="password">Password:</label></td>
		<td><input type="password" id="password" name="password"></td>
	</tr>
	<tr>
		<td><input type="submit" value="login"></td>
	</tr>
</table>
</body>
</html>