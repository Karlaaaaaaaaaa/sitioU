<?php
require('../fpdf/fpdf.php');

//Create A 4 Landscape page
$fpdf = new FPDF('P', 'mm', 'A4');
$fpdf->SetTitle('CARTA PASANTE PSICOLOGIA- PDF');
$fpdf->AddPage();
$fpdf->SetCreator('Felipe Galdames Vidal');
$fpdf->Image('img/cpPsicolo.jpg', 0, 0, 215);

if(!empty($_POST['submit'])){
    $apellidos=$_POST['apellidos'];
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

    $fpdf->SetFont('CATFranken', '', 35);
    $fpdf->Cell(240, 234,utf8_decode($apellidos), 0, 1,'C');

    $fpdf->SetFont('exmouth', '', 18);
    $fpdf->SetXY(123, 206.5);
    $fpdf->Cell(0, 0,utf8_decode($fecha), 0, 0);


//Uso las fuentes de acuerdo a cada una
//$fpdf->SetFont('FREESCPT', '', 35); El último número es el tamaño de la fuente
 //el 1 antes del 'C', le da un salto de linea y el 20 después del 190, le da espacio entre lineas 

/* $fpdf->SetFont('UnifrakturMaguntia', '', 35);
$fpdf->Cell(240, 200, utf8_decode("Introducción - Lobster Regulaaar"), 0, 1, 'C');

 */

 $fpdf->Output('CARTA PASANTE PSICOLOGIA.pdf',"D");

 ?>