<?php 

	session_start();
	//header('location:home.php');

	$con = mysqli_connect('localhost','root');

	if ($con) {

		echo "Connection Successful";
	}
	else{
	 echo "No Connection";
	}

	mysqli_select_db($con, 'smiles');

	$name = $_POST['name'];
	$email = $_POST['email'];
	$pass = $_POST['password'];

	$q = "select * from `registered users` where name = '$name' && email = '$email' && password = '$pass' ";

	$result = mysqli_query($con, $q);

	$num = mysqli_num_rows($result);

    if($num == 1){
    	// echo "Username already Exist";
		echo "<script> alert('User already Exist');  </script>";
		header('location:add_user.php');
		
    }

    else {

	$qy = "insert into `registered users`(name, email, password) values ('$name', '$email', '$pass') ";
 	
	mysqli_query($con, $qy); 
	?><?php
	echo "<script> alert('User Registeration Successful.');  </script>";
	
	header('location:add_user.php');
	
	}
?>