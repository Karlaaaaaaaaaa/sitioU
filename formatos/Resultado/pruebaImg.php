<?php
if(isset($_FILES['img']['tmp_name'])){
    require('./fpdf/fpdf.php'); 
    $pdf=new FPDF();
    $pdf->AddPage();
    //$pdf->Image('./img/espex.png',10,10,40);
    $pdf->ln(10);
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(0,10,'OBSERVACION DE CONDUCTA','B',1,'C');
    $pdf->ln(3);
    $pdf->Cell(0,7,'RELATO DE LA SITUACION DETECTADA, INCLUYE LA CORRECCION','B',1,'L');
    $pdf->Cell(0,7,'EVIDENCIA FOTOGRAFICA DE LOS EVENTOS DESCRITOS','B',1,'L');
    $pdf->ln(3);

    move_uploaded_file($_FILES['img']['tmp_name'][0], 'img.jpg');
    $pdf->Cell(95,80, $pdf->Image('img.jpg', $pdf->GetX()+2, $pdf->GetY()+2, 90) ,1,"C");
    unlink('img.jpg');

    $pdf->ln(83);
    $pdf->SetFont('Arial','I',11);
    $pdf->Output(); 
}
else{
    echo '
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="img[]" />
            <button>Enviar</button>
        </form>
    ';
}
?>