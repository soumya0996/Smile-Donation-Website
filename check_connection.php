<?php
$servername = "localhost";
$username = "username";
$password = "YES";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
  }
echo "Connected successfully";

// Create database
$sql = "CREATE DATABASE Smiles";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}


mysqli_close($conn);

?>