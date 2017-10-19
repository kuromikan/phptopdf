<?php
include_once ('tcpdf/tcpdf.php');
 
class PDF_report1 extends TCPDF
{
    //Page header
    function Header()
    {
        // 自訂頁首內容
    }
    function Footer()
    {
        // 自訂頁尾內容
    }
}

$pdf = new PDF_report1('P','mm','A4', true, 'UTF-8', false);
//$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT); 
$pdf->SetMargins(30, 30, 30); 
$pdf->AddPage();
$pdf->SetFont('cid0ct', '', 10);
$html="";
$filename = "tmp.html";
	$handle = fopen($filename, "rb");
	$contents;
	while (!feof($handle))
	{
		  //8192為字元數，每一次取8192個字元
		  $html = fread($handle, filesize($filename)*2);
		  //echo $contents . "<br>";
	}
	fclose($handle);
$pdf->writeHTML($html, true, 0, true, true);

$pdf->Output('print.pdf', 'I');



?>