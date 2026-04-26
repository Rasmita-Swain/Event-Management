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
    echo "success";

} else {
    echo "error";
}

$conn->close();
?>