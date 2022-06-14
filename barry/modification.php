<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../">
  <title>Document</title>
</head>
<body>

  
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maria_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE participant SET nom='diarra' WHERE id_part=6";

if ($conn->query($sql) === TRUE) {
  echo "Mise à jour effectuée";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>