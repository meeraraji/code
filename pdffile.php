<form method="POST" action="admreportgen.php">
<?php
require ("fpdf/fpdf.php");
$pdf=new FPDF();

var_dump(get_class_methods($pdf));

$pdf->AddPage();
$pdf->SetFont("Arial","","20");
$pdf->Cell(0, 10,"EFFICIENT DOCTOR PATIENT PORTAL",1,1,"C");
$pdf->Cell(0, 10,"MONTHLY REPORT" ,1,1,"C");

$pdf->SetFillColor(255,0,0);
$pdf->SetTextColor(255);
$pdf->SetDrawColor(128,0,0);
$pdf->SetLineWidth(.3);

// Title row
$pdf->SetFont('', 'B');
$pdf->Cell(100, 8, "DOCTOR NAME", 1, 0, 'L', true);
$pdf->SetFont('', '');
$pdf->Cell(20, 8, "Score", 1, 0, 'C', true);
$pdf->Cell(20, 8, "Results", 1, 0, 'C', true);
$pdf->Ln();

// Data rows

// (loop) foreach($data as $row) {

    $pdf->SetFont('', 'B');
    $pdf->Cell(100, 8, "BOOKING", "LTR", 0, 'L');
    $pdf->Cell(20, 8, "", "LTR");
    $pdf->Cell(20, 8, "", "LTR");
    $pdf->Ln();

    $pdf->SetFont('', 'B');
    $pdf->Cell(100, 8, "The ability to interpret information and", "LR", 0, 'L');
    $pdf->SetFont('', '');
    $pdf->Cell(20, 8, "6", "LR");
    $pdf->Cell(20, 8, "Effective", "LR");
    $pdf->Ln();

    $pdf->SetFont('', 'B');
    $pdf->Cell(100, 8, "drawing accurate conclusions", "LBR", 0, 'L');
    $pdf->Cell(20, 8, "", "LBR");
    $pdf->Cell(20, 8, "", "LBR");
    $pdf->Ln();

$pdf->Output();
?>
</form>
