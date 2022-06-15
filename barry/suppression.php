<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maria_db";

$id=$_GET['id'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM participant where id_part=$id";

if ($conn->query($sql) === TRUE) {
  echo "Suppression Reussie";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>