<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<fieldset>
		<legend>REGISTRATION</legend>
		<form method="POST" action="regCheck.php">
			<table>
				<tr>
					<td>Id <br><input type="text" name="id" value="" /></td>
				</tr>

				<tr>
					<td>Password <br><input type="Password" name="password" value="" /></td>
				</tr>

				<tr>
					<td>Confirm Password <br><input type="Password" name="cpassword" value="" /></td>
				</tr>

				<tr>
					<td>Name <br><input type="name" name="name" value="" /></td>
				</tr>

				<tr>
					<td>User Type <hr></td>
				</tr>

				<tr>
					<td>
						<input type="radio" name="userType" value="user">User 
						<input type="radio" name="userType" value="admin">Admin
						<hr>
					</td>
				</tr>

				<tr>
					<td>
					<input type="submit" name="submit" value="Sign Up"/>
					<a href="Login.php">Sign In</a>

					</td>
				</tr>

			</table>
		</form>

	</fieldset>


</body>
</html>