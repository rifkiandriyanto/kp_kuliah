<?php
require_once('html2fpdf/html2fpdf.php');
ob_start();
error_reporting(1);
$pdf=new HTML2FPDF();
$pdf->DisplayPreferences('Fullscreen');
include "siswa_pdf.php";
$html = ob_get_contents();
ob_end_clean();
$pdf->addPage();
$pdf->WriteHTML($html);
$pdf->Output ('siswa.pdf','D');
?>