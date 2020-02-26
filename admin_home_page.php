<?php	
	session_start();
	if(!isset($_SESSION['id'])){  
		header("location: login.php");
	}

	$name = $_SESSION['name'];
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<center>
		<h1>Welcome <?php echo $name ?>!</h1>
		<a href="profile.php">Profile</a><br>
		<a href="#">Change Password</a><br>
		<a href="view_users.php">View Users</a><br>
		<a href="Logout.php">Logout</a>	
	</center>
	
</body>
</html>


<!-- $_SESSION['varname'] = $var_value;

//On page 2
$var_value = $_SESSION['varname']; -->