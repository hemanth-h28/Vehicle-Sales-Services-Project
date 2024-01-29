<?php
require('fpdf/fpdf.php');

class PDF extends FPDF {
    function Header() {
        // Add header content if needed
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

    // Add bill table headers
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(40, 10, 'Item Name', 1);
    $pdf->Cell(40, 10, 'Price', 1);
    $pdf->Cell(40, 10, 'Quantity', 1);
    $pdf->Cell(40, 10, 'Total', 1);
    $pdf->Ln();

    // Loop through cart items and add them to the PDF table
    if(isset($_SESSION['cart'])) {
        foreach($_SESSION['cart'] as $key => $value) {
            $pdf->SetFont('Arial', '', 12);
            $pdf->Cell(40, 10, $value['Item_name'], 1);
            $pdf->Cell(40, 10, $value['price'], 1);
            $pdf->Cell(40, 10, $value['Quantity'], 1);
            $pdf->Cell(40, 10, ($value['price'] * $value['Quantity']), 1);
            $pdf->Ln();
        }
    }

    // Add grand total
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(120, 10, 'Grand Total', 1);
    $pdf->Cell(40, 10, $_POST['gtotal'], 1);

    // Output the PDF
    $pdf->Output();

    // Clear the cart after generating the PDF
    unset($_SESSION['cart']);
}
?>
