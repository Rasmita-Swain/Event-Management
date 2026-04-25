<?php
session_start();
require_once "../database/db.php";

$email = $_SESSION['email'] ?? "test@gmail.com";

$event_name = $_POST['event_name'];
$phone = $_POST['phone'];
$guests = $_POST['guests'];
$ent = $_POST['entertainment'];
$dec = $_POST['decoration'];
$media = $_POST['media'];
$total = $_POST['total'];

// Insert event
$stmt = $conn->prepare("INSERT INTO events (user_email, event_name, phone, guests, entertainment, decoration, media, total) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("sssidddd", $email, $event_name, $phone, $guests, $ent, $dec, $media, $total);

if ($stmt->execute()) {

    //  Get inserted event ID
    $event_id = $stmt->insert_id;

    // INSERT CATERING DATA
  foreach ($_POST['foods'] as $food) {

    $parts = explode("|", $food);

    $foodName = $parts[0] ?? "Unknown";
    $price = $parts[1] ?? 0;

    $stmt2 = $conn->prepare("INSERT INTO catering (event_id, food_name, price) VALUES (?, ?, ?)");
    $stmt2->bind_param("isd", $event_id, $foodName, $price);
    $stmt2->execute();

}

    echo "✅ Event + Catering saved successfully!";

} else {
    echo "❌ Error: " . $stmt->error;
}

?>