<?php
require('../fpdf/fpdf.php');
require_once "../database/db.php";

$event_id = $_GET['event_id'];

// Get event details
$sql = "SELECT * FROM events WHERE id='$event_id'";
$result = mysqli_query($conn, $sql);
$event = mysqli_fetch_assoc($result);

// Get catering details
$catering_sql = "SELECT * FROM catering WHERE event_id='$event_id'";
$catering_result = mysqli_query($conn, $catering_sql);

// Create PDF
$pdf = new FPDF();
$pdf->AddPage();

// Title
$pdf->SetFont('Arial','B',20);
$pdf->Cell(190,10,'EVENTA INVOICE',0,1,'C');

$pdf->Ln(10);

// Event Details
$pdf->SetFont('Arial','',14);
$pdf->Cell(100,10,"Event Type: ".$event['event_type'],0,1);
$pdf->Cell(100,10,"Event Name: ".$event['event_name'],0,1);
$pdf->Cell(100,10,"Phone: ".$event['phone'],0,1);
$pdf->Cell(100,10,"Guests: ".$event['guests'],0,1);
$pdf->Cell(100,10,"Entertainment: Rs ".$event['entertainment'],0,1);
$pdf->Cell(100,10,"Decoration: Rs ".$event['decoration'],0,1);
$pdf->Cell(100,10,"Media: Rs ".$event['media'],0,1);

$pdf->Ln(10);

// Catering section
$pdf->SetFont('Arial','B',16);
$pdf->Cell(100,10,"Food Items",0,1);

$pdf->SetFont('Arial','',12);

while($row = mysqli_fetch_assoc($catering_result)){
    $pdf->Cell(100,10,$row['food_name'],0,1);
}

$pdf->Ln(10);

// Total
$pdf->SetFont('Arial','B',18);
$pdf->Cell(100,10,"Total Amount: Rs ".$event['total'],0,1);

// Auto download
header("Refresh:2; url=/Eventa/index.php");
$pdf->Output('D', 'Eventa_Bill.pdf');
exit();
?>