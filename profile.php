<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>
		Profile
	</title>
</head>
<body>
	<table border="1">
		<tr>
			<td colspan="2">
				<center>Profile</center>
			</td>
		</tr>
		<tr>
			<td>ID</td>
			<td>16-10101-2</td>
		</tr>
		<tr>
			<td>NAME</td>
			<td>Bob</td>
		</tr>
		<tr>
			<td>USER TYPE</td>
			<td>Admin</td>
		</tr>
		<tr>
			<td colspan="2">
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a href="admin_home_page.php">Go Home</a>
			</td>
		</tr>
	</table>
</body>
</html>