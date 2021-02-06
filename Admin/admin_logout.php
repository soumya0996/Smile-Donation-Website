<?php 

// Inialize session
include("../check_connection.php");

// Delete certain session
unset($_SESSION['name']);

session_destroy();

// Jump to login page
header('Location:../home.php');

?>