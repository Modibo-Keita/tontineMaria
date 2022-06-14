<?php
$servername = "localhost";
$username = "daoumari";
$password = "M@richou123";
$dbname = "brief";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM apprenants";

if ($conn->query($sql) === TRUE) {
  echo "Suppression Reussie";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>