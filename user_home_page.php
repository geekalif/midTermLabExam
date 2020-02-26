<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<center>
		<h1>Welcome Anne!</h1>
		<a href="profile.php">Profile</a><br>
		<a href="#">Change Password</a><br>
		<a href="Logout.php">Logout</a>	
	</center>
	
</body>
</html>