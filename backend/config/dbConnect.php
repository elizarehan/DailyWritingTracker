<?php
$servername = "DB_HOST";
$username   = "DB_USER";
$password   = "DB_PASS";
$dbname     = "DB_NAME";

//*implement try-catch instead

//Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
  die("Connection Failed: " . $conn->connect_error);
}
?>
