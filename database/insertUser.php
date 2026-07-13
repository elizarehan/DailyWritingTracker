<?php
require_once "dbConnect.php";

$first_name = $_POST['first_name'] ?? '';
$last_name  = $_POST['last_name'] ?? '';
$email      = $_POST['email'] ?? '';
$password   = $_POST['password'] ?? '';

//hash the password
$hashedPassword = password_hash('password', PASSWORD_DEFAULT);

//check if email already exists
$checkSql  = "SELECT * FROM userdata WHERE email = ? LIMIT 1";
$checkStmt = $conn->prepare($checkSql);

if ($checkStmt === false) {
  die("Prepare Failed: " . htmlspecialchars($conn->error)); //CHANGE TO try-catch
}

$checkStmt = bind_param("s", $email);
$checkStmt->execute();
$checkStmt->store_result();

if (checkStmt->num_rows > 0){
  echo "This email is already registered.";
  $checkStmt->close();
  $conn->close();
  exit();
}  
$checkStmt->close();

$sql = "INSERT INTO userdata (first_name, last_name, email, hashedPassword, password_created
        VALUES (?, ?, ?, ?, CURRENT_DATE)";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
  die('Prepare failed: ' . htmlspecialchars($conn->error));
}

$stmt->bind_param("ssss", $first_name, $last_name, $email, $hashedPassword);

if ($stmt->execute()){
  echo "Account created successfully";
} else {
  echo "Error: " . htmlspecialchars($stmt->error);
}

$stmt->close();
$conn->close();

?>
