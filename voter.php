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
$sql = "CREATE TABLE vote (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ip varchar(45) NOT NULL,
candidat_id int(11) NOT NULL,
points int(11) NOT NULL,
vote_date timestamp NULL DEFAULT current_timestamp()
  )";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>