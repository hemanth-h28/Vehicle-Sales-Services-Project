<?php
require('fpdf/fpdf.php'); // Adjust the path to FPDF

class PDF extends FPDF {
    function Header() {
        // Load logo image
        $logo = 'img/logo3.png'; // Update with the actual path
        $this->Ln(50);
        // Add company name, address, and logo to header
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'The Royal Touch', 0, 1, 'C');
        $this->Cell(0, 10, 'Subramanya Nagara 2nd Cross Arsikere, Hassan 573-103', 0, 1, 'C');
        $this->Image($logo, 80, 20, 50); // Adjust coordinates as needed
        $this->Ln(10);
        $this->Cell(0, 10, 'Service Request Details', 0, 1, 'C');
    }

    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . ' / {nb}', 0, 0, 'C');
    }
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

// Fetch data from the database
$conn = new mysqli("localhost", "root", "", "testing");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tbl_servicerequest";
$result = $conn->query($sql);

$pdf->SetFont('Arial', '', 10); // Increase font size to 14

if ($result->num_rows > 0) {
    $header = array('Customer Name', 'Phone No.', 'Service Name', 'Service Price');
    $pdf->SetFillColor(200, 220, 255);
    $pdf->SetFont('Arial', 'B', 10);

    foreach ($header as $col) {
        $pdf->Cell(40, 10, $col, 1, 0, 'C', 1);
    }
    $pdf->Ln();

    $pdf->SetFont('Arial', '', 10);

    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(40, 10, $row["CustomerName"], 1);
        $pdf->Cell(40, 10, $row["PhoneNo"], 1);
        $pdf->Cell(40, 10, $row["ServiceName"], 1);
        $pdf->Cell(40, 10, $row["Price"], 1);
        $pdf->Ln();
    }
} else {
    $pdf->Cell(0, 10, 'No records found.', 0, 1, 'C');
}

$conn->close();

$pdf->Output();
?>
