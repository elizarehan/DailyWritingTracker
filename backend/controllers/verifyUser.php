<?php
session_start();
require_once "../config/dbConnect.php";

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM userdata WHERE email = ? LIMIT 1);
$stmt->bindparam("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if (result->num_rows != 1) {
  echo "Account not found";
  exit;
}

$row = $result->fetch_assoc();

if (!password_verify($password, $row['password'])) {
  echo "Incorrect password";
}

echo "OK";
exit;
?>
