<?php
require_once "../database/db.php";

$sql = "SELECT * FROM events ORDER BY id DESC";
$result = $conn->query($sql);

$bookings = [];

/*while ($row = $result->fetch_assoc()) {

    $bookings[] = [
        "id" => $row['id'],
        "event" => $row['event_name'],
        "user" => $row['user_email'],
        "date" => date("Y-m-d", strtotime($row['created_at'])),
        "guests" => $row['guests'],
        "status" => $row['status'],
        "total" => $row['total']
    ];
}*/
while ($row = $result->fetch_assoc()) {

    $event_id = $row['id'];

    // FETCH FOOD / SERVICES
    $food_sql = "SELECT food_name FROM catering WHERE event_id = $event_id";
    $food_result = $conn->query($food_sql);

    $services = [];

    while ($f = $food_result->fetch_assoc()) {
        $services[] = $f['food_name'];
    }

    //  ADD TO BOOKINGS
    $bookings[] = [
        "id" => $row['id'],
        "event" => $row['event_name'],
        "user" => $row['user_email'],
        "date" => isset($row['created_at']) ? date("Y-m-d", strtotime($row['created_at'])) : "N/A",
        "guests" => $row['guests'],
        "status" => $row['status'],
        "services" => $services, 
        "total" => $row['total']
    ];
}
echo json_encode($bookings);
?>