<?php
session_start();
require('fpdf/fpdf.php');

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
    }

    function Footer() {
        // Add footer content if needed
    }
}


if(isset($_POST['purchase'])) {
    // Capture form data
    $fullname = $_POST['fullname'];
    $phonenumber = $_POST['phonenumber'];
    $mail = $_POST['mail'];
    $address = $_POST['address'];
    $pay_mode = $_POST['pay_mode'];

    // Initialize PDF
    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);

    // Add payment details to PDF
    $pdf->Cell(0, 10, 'Payment Details', 0, 1, 'C');
    $pdf->Ln(10);
    $pdf->Cell(0, 10, "Full Name: $fullname", 0, 1);
    $pdf->Cell(0, 10, "Phone Number: $phonenumber", 0, 1);
    $pdf->Cell(0, 10, "Email: $mail", 0, 1);
    $pdf->Cell(0, 10, "Address: $address", 0, 1);
    $pdf->Cell(0, 10, "Payment Mode: $pay_mode", 0, 1);
    $pdf->Ln(10);

    // Add cart items to PDF
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(40, 10, 'Item Name', 1);
    $pdf->Cell(40, 10, 'Price', 1);
    $pdf->Cell(40, 10, 'Quantity', 1);
    $pdf->Cell(40, 10, 'Total', 1);
    $pdf->Ln();

    $totalAmount = 0; // To calculate the total amount
    foreach($_SESSION['cart'] as $key => $value) {
        $pdf->SetFont('Arial', '', 12);
        $pdf->Cell(40, 10, $value['Item_name'], 1);
        $pdf->Cell(40, 10, $value['price'], 1);
        $pdf->Cell(40, 10, $value['Quantity'], 1);
        $pdf->Cell(40, 10, ($value['price'] * $value['Quantity']), 1);
        $pdf->Ln();
        
        $totalAmount += ($value['price'] * $value['Quantity']);
    }

    // Add grand total
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(120, 10, 'Grand Total', 1);
    $pdf->Cell(40, 10, $totalAmount, 1);

    // Output the PDF
    $pdf->Output();

    // Clear the cart after generating the PDF
    unset($_SESSION['cart']);
}
?>
