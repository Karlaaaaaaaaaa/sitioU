<?php
require('../fpdf/fpdf.php');

//Create A 4 Landscape page
$fpdf = new FPDF('P', 'mm', 'A4');
$fpdf->SetTitle('CONSTANCIA DE TERMINACIÓN PSICOLOGIA- PDF');
$fpdf->AddPage();
$fpdf->Image('img/machotePsicologia.jpg', 0, 0, 213,300);

if(!empty($_POST['submit'])){
    $imagen=$_POST['firma'];
    $nombres=$_POST['nombres'];
    $revoe=$_POST['revoe'];
    $fecha=$_POST['fecha'];
}

//Agrego fuentes
$fpdf->AddFont('FREESCPT', '', 'freescpt.php');
$fpdf->AddFont('JOKERMAN', '', 'jokerman.php');
$fpdf->AddFont('ALIENLEAGUEREGULAR', '', 'alienleagueii.php');
$fpdf->AddFont('LEAGUEGOTHICREGULAR', '', 'LeagueGothic-Regular.php');
$fpdf->AddFont('LOBSTERREGULAR', '', 'Lobster-Regular.php');
$fpdf->AddFont('PressStart2P', '', 'PressStart2P-Regular.php');
$fpdf->AddFont('UnifrakturMaguntia', '', 'UnifrakturMaguntia-Regular.php');
$fpdf->AddFont('CATFranken', '', 'CATFranken-Deutsch.php');
$fpdf->AddFont('exmouth', '', 'exmouth_.php');
$fpdf->AddFont('GreatVibes', '', 'GreatVibes-Regular.php');
$fpdf->AddFont('PTSerif', '', 'PTSerif-Bold.php');

$fpdf->SetFont('GreatVibes', '', 35);
$fpdf->Cell(210, 266,utf8_decode($nombres), 0, 1,'C');

$fpdf->SetFont('PTSerif', '', 11);
$fpdf->SetXY(163, 180);
$fpdf->Cell(0, 0,utf8_decode($revoe), 0, 0);

$fpdf->SetFont('PTSerif', '', 14);
$fpdf->SetXY(163, 78);
$fpdf->Cell(0, 0,utf8_decode($fecha), 0, 0);


if($_REQUEST['firma'] == "si"){
    $fpdf->Image('img/FIRMA ABI.png',59,230,90,40,'png');
} 

//Uso las fuentes de acuerdo a cada una
//$fpdf->SetFont('FREESCPT', '', 35); El último número es el tamaño de la fuente
 //el 1 antes del 'C', le da un salto de linea y el 20 después del 190, le da espacio entre lineas 

/* $fpdf->SetFont('UnifrakturMaguntia', '', 35);
$fpdf->Cell(240, 200, utf8_decode("Introducción - Lobster Regulaaar"), 0, 1, 'C');

 */

 $fpdf->Output('MACHOTE PSICOLOGIA.pdf',"D");

 ?>