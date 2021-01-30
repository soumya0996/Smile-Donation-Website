<?php 
	session_start();
	$con = mysqli_connect('localhost','root');
	if ($con) {
		echo "Connection Successful";
	}
	else{
	 echo "No Connection";
	}
	mysqli_select_db($con,'smiles');
	echo $name = $_POST['user'];
	echo $pass = $_POST['password'];

	$q = "select * from `registered users` where username = '$name' && password = '$pass' ";

	$result = mysqli_query($con, $q);

	$num = mysqli_num_rows($result);

    if($num == 1){
    	$_SESSION['username'] = $name;
    	header('location:login.php');
    }

    else {
		header('location:sign-up_and_sign-in.php');
		// echo "Can't Login..Try Again";
		// "<script> alert('Can not Login..Try Again');  </script>";
	}
?>