<?php
	session_start();
	
	if( isset($_REQUEST['submit'])){
		$id = $_REQUEST['id'];
		$password =  $_REQUEST['password'];
		$name = $_REQUEST['name'];
		
		if(empty(trim($id)) || empty(trim($password))){
			echo "Invalid Login Submission";
		}else{

			$file = fopen('user.txt', 'r');
			$user = fread($file, filesize('user.txt'));
			$data = explode('|', $user);

			if( trim($data[1]) == $id && trim($data[2]) == $password){
				$_SESSION['id'] = $id;
				$_SESSION['pass'] = $password;
				$_SESSION['name'] = $name;

					header("location: admin_home_page.php");
				}
			else{
				echo "invalid uname/password";
				}

			
		}

	}else{
		header("location: Login.php");
	}
?>
