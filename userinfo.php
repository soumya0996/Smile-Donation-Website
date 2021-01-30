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

	$name = $_POST['user'];
	$email = $_POST['email'];
	$pass = $_POST['password'];

	$q = "select * from `registered users` where username = '$name' && email = '$email' && password = '$pass' ";

	$result = mysqli_query($con, $q);

	$num = mysqli_num_rows($result);

    if($num == 1){

    	echo "User Registered";  
    	echo "<script> alert('User Registeration Successful.');  </script>";	
    	
    }

    else {

	$qy = "insert into `registered users`(username, email, password) values ('$name', '$email', '$pass') ";
 	
	mysqli_query($con, $qy); 
	echo "<script> alert('User Registeration Successful.');  </script>";
	header('location:sign-up_and_sign-in.php');
	
	}
?>