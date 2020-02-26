<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>View Users</title>
</head>
<body>
	<table border="1">
		<tr>
			<td colspan="3">
				<center>Users</center>
			</td>
		</tr>

		<tr>
			<td>ID</td>
			<td>NAME</td>
			<td>USER TYPE</td>
		</tr>
		<tr>
			<td>15-10101-1</td>
			<td>Bob</td>
			<td>Admin</td>
		</tr>
		<tr>
			<td>16-10102-2</td>
			<td>Anne</td>
			<td>User</td>
		</tr>
		<tr>
			<td>16-10103-2</td>
			<td>Kent</td>
			<td>User</td>
		</tr>
		<tr>
			<td>16-10104-3</td>
			<td>James</td>
			<td>Admin</td>
		</tr>
		<tr>
			<td colspan="3">
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="admin_home_page.php">Go Home</a>
			</td>
		</tr>
	</table>
</body>
</html>