<?php
require_once "../database/db.php";

$name = $_POST['name'];
$stars = $_POST['stars'];
$message = $_POST['message'];

// Insert into DB
$sql = "INSERT INTO reviews (name, stars, message) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sis", $name, $stars, $message);

if ($stmt->execute()) {

    // email to admin
    $to = "eventaa123@gmail.com"; // change this
    $subject = "New Review Submitted";
    $body = "Name: $name\nStars: $stars\nMessage: $message";
    $headers = "From: noreply@eventa.com";

    mail($to, $subject, $body, $headers);

    echo "success";

} else {
    echo "error";
}

$conn->close();
?>