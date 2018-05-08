<?php
if(!empty($_POST['submit']))
{
    $f_name=$_POST['first_name'];
    $l_name=$_POST['last_name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];

require("fpdf/fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->Cell(70,10,"welcome {$f_name}",1,1);

$pdf->Cell(70,10,"Last Name:",1,0);
$pdf->Cell(70,10,$l_name,1,1);

$pdf->Cell(70,10,"Mobile:",1,0);
$pdf->Cell(70,10,$mobile,1, 1);

$pdf->Cell(70,10,"Email:",1,0);
$pdf->Cell(70,10,$email,1,1 );

$pdf->output();
}
?>

