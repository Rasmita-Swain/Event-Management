<?php
require_once "../database/db.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, email, password, role)
        VALUES ('$username', '$email', '$hashedPassword', '$role')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../Registration/signup.html?success=1");
    exit();
} else {
    echo "Error: " . $conn->error;
}
?>