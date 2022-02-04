<?php
$servername = "127.0.0.1";
$username = "testUser";
$password = "1234";
$dbname = "records2";
//connection using MySQLi Object-Oriented
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
  echo "Connection OK: ";
}

?>