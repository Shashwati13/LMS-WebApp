
<?php
header('Content-type: application/pdf');
include "index.php";
include "fpdf/fpdf.php";

$result = mysqli_query($conn,"SELECT employee_ID,villagename FROM nba_employee");
$header = mysqli_query($conn,"SELECT UCASE(`COLUMN_NAME`) FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='project' AND `TABLE_NAME`='nba_employee'and `COLUMN_NAME` in ('villagename','employee_ID')");

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(95,20,'<h3>This is the pdf of <b>CITY</b></h3>');
$pdf->Ln();
foreach($header as $heading) 
{
	foreach($heading as $column_heading)
		$pdf->Cell(85,12,$column_heading,1);
}
foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(85,12,$column,1);
}

$pdf->Output('D','abcd.pdf');
?>

