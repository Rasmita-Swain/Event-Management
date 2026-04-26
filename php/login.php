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

 $_SESSION['user_email'] = $user['email'];

        //  ADMIN CHECK (WRITE HERE)
        $admin_email = "eventaa@gmail.com"; //  your admin email

        if ($user['email'] === $admin_email) {
            $_SESSION['role'] = 'admin';

            header("Location: /Eventa/demo_admin_page/adminBoard.php");
            exit();

        } else {
            $_SESSION['role'] = 'user';
            
            header("Location: /Eventa/index.php");
            exit();
        }

    } else {
        echo "Wrong password!";
    }

} else {
    echo "User not found!";
}
?>