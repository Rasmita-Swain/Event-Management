<?php
require_once "../database/db.php";

$sql = "SELECT * FROM reviews ORDER BY created_at DESC LIMIT 20";
$result = $conn->query($sql);

$reviews = [];

while ($row = $result->fetch_assoc()) {
    $reviews[] = $row;
}

echo json_encode($reviews);

$conn->close();
?>