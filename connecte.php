<?php
$servername = "localhost";
$username = "spcom1_koudou";
$password = "}3b3j2UnPn7]";
$dbname = "spcom1_koudoudb";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE users (
user_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nomc varchar(225) NOT NULL,
commune varchar(225) NOT NULL,
email varchar(225) NOT NULL,
mtp varchar(225) NOT NULL,
date_inscription datetime DEFAULT NULL
  )";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>