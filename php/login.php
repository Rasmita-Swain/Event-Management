<?php
session_start();
require_once "../database/db.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {

        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role'];

        // 🔥 Role-based redirect
       if ($user['role'] == 'admin') {
    header("Location: /Eventa/demo admin page/adminBoard.html");
    exit();
} else {
    header("Location: /Eventa/index.html");
    exit();
}

    } else {
        echo "Wrong password!";
    }

} else {
    echo "User not found!";
}
?>