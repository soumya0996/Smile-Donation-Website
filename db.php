<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'smiles')or die("Error: " . mysqli_error($db));
?>
