<?php

	if (isset($_REQUEST['submit'])) {
		$id = $_REQUEST['id'];
		$password = $_REQUEST['password'];
		$cpassword = $_REQUEST['cpassword'];
		$name = $_REQUEST['name'];

		if (empty(trim($id)) || empty(trim($password)) || empty(trim($cpassword)) || (trim($cpassword) != trim($cpassword))) {
			echo "Invalid Registration";
		}
		else if(isset($_POST["id"]) && isset($_POST["password"])){
			$file = fopen("user.txt","a");
			fputs($file,$_POST["name"]."|".$_POST["id"]."|".$_POST["password"]."\r\n");
			fclose($file);

			header("location: Login.php");
		}

	}


?>