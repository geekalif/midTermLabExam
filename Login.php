<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<fieldset>
		<legend>LOGIN</legend>

		<form method="POST" action="logCheck.php">

			<table>

				<tr>
					<td>Id <br><input type="text" name="id" value="" /></td>
				</tr>

				<tr>
					<td>Password <br><input type="Password" name="password" value="" />
					<hr>
					</td>
				</tr>

				<tr>
					<td>
					<input type="submit" name="submit" value="Login"/>
					<a href="registration.php">Register</a>

					</td>
				</tr>

			</table>

		</form>

	</fieldset>
</body>
</html>