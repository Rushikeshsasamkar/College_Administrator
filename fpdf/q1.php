<?php

require('fpdf.php');
class PDF extends FPDF
{
// Page header
    function Header()
    {
        // Logo
        $this->Image('img\logo.jpg',10,10,50);
        $this->SetFont('Arial','B',13);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(80,10,'Bonafide Certificate',1,0,'C');
        // Line break
        $this->Ln(90);
    }

// Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }
}
$pdf = new PDF();
//header
$pdf->AddPage();
//footer page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',16);


$pdf->Output('my_file.pdf','I');

?>