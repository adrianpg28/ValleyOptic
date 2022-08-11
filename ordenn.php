<?php
require('fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // Arial bold 15
        $this->SetFont('Arial','B',18);
        // Movernos a la derecha
        $this->Cell(1);
        // Título
        $this->Cell(80,10,'ORDEN DE TRABAJO',1,0,'C');
        // Salto de línea
        $this->Ln(20);

    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',10);
        // Número de página
        $this->Cell(195,10,utf8_decode('NOTA: Los trabajos tienen como plazo máximo 30 días. Después de este plazo serán enviados a Stgo y luego desarmados'),1,0,'C');
    }
}


require "conexion.php";

$id=$_REQUEST['id'];

$consulta = "select * from pacientes where id_atencion='$id' ";
$resultado = $conexion->query($consulta);


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);

while($row = $resultado->fetch_assoc())
{
    
    $pdf->Cell(100); 
    $pdf->Cell(14, 8, 'SMN',1,1,'C',0);
    $pdf->Cell(100);
    $pdf->Cell(14, 8, utf8_decode($row['id_atencion']),1,0,'C',0);
    $pdf->Ln(-3);

    $pdf->Cell(40, 10, 'Rut',0,0,'L',0);
    $pdf->Cell(30, 10, utf8_decode($row['rutp']),0,1,'L',0);
    $pdf->Ln(-3);
    
    $pdf->Cell(40, 10, 'Nombre',0,0,'L',0);
    $pdf->Cell(30, 10, utf8_decode($row['nombre']),0,1,'L',0);
    $pdf->Ln(-3);

    $pdf->Cell(40, 10, 'Direccion',0,0,'L',0);
    $pdf->Cell(30, 10, utf8_decode($row['comuna']."".','."  ".$row['direccion']),0,1,'L',0);
    $pdf->Ln(5);  
    
    $pdf->Cell(30, 9, 'PARA LEJOS',1,0,'C',0);
    $pdf->Ln(15);

    $pdf->Cell(20, 10, 'Armazon:',0,0,'L',0);
    $pdf->Cell(20, 10, utf8_decode($row['lejosarmazon']),0,1,'L',0);
    $pdf->Ln(-4);  

    $pdf->Cell(20, 10, 'Cristales:',0,0,'L',0);
    $pdf->Cell(20, 10, utf8_decode($row['lejoscristales']),0,1,'L',0);
    $pdf->Ln(5);

    $pdf->Cell(20, 8, '',0,0,'C',0);
    $pdf->Cell(20, 8, 'ESF',1,0,'C',0);
    $pdf->Cell(20, 8, 'CYL',1,0,'C',0);
    $pdf->Cell(20, 8, 'EJE',1,1,'C',0);
    $pdf->Cell(20, 8, 'OD',1,0,'C',0);
    $pdf->Cell(20, 8, utf8_decode($row['lejosojoderechoESF']),1,0,'C',0);
    $pdf->Cell(20, 8, utf8_decode($row['lejosojoderechoCYL']),1,0,'C',0);
    $pdf->Cell(20, 8, utf8_decode($row['lejosojoderechoEJE']),1,1,'C',0);
    $pdf->Cell(20, 8, 'OI',1,0,'C',0);
    $pdf->Cell(20, 8, utf8_decode($row['lejosojoizquierdoESF']),1,0,'C',0);
    $pdf->Cell(20, 8, utf8_decode($row['lejosojoizquierdoCYL']),1,0,'C',0);
    $pdf->Cell(20, 8, utf8_decode($row['lejosojoizquierdoEJE']),1,1,'C',0);
    $pdf->Ln(2);
    $pdf->Cell(20, 8, 'DP',1,0,'C',0);
    $pdf->Cell(20, 8, utf8_decode($row['lejosDP']),1,0,'C',0);
    $pdf->Ln(20);


    $pdf->Cell(30, 9, 'PARA CERCA',1,0,'C',0);
    $pdf->Ln(15);

    $pdf->Cell(20, 10, 'Armazon:',0,0,'L',0);
    $pdf->Cell(20, 10, utf8_decode($row['cercaarmazon']),0,1,'L',0);
    $pdf->Ln(-4);  

    $pdf->Cell(20, 10, 'Cristales:',0,0,'L',0);
    $pdf->Cell(20, 10, utf8_decode($row['cercacristales']),0,1,'L',0);
    $pdf->Ln(5);

    $pdf->Cell(20, 8, '',0,0,'C',0);
    $pdf->Cell(20, 8, 'ESF',1,0,'C',0);
    $pdf->Cell(20, 8, 'CYL',1,0,'C',0);
    $pdf->Cell(20, 8, 'EJE',1,1,'C',0);
    $pdf->Cell(20, 8, 'OD',1,0,'C',0);
    $pdf->Cell(20, 8, utf8_decode($row['cercaojoderechoESF']),1,0,'C',0);
    $pdf->Cell(20, 8, utf8_decode($row['cercaojoderechoCYL']),1,0,'C',0);
    $pdf->Cell(20, 8, utf8_decode($row['cercaojoderechoEJE']),1,1,'C',0);
    $pdf->Cell(20, 8, 'OI',1,0,'C',0);
    $pdf->Cell(20, 8, utf8_decode($row['cercaojoizquierdoESF']),1,0,'C',0);
    $pdf->Cell(20, 8, utf8_decode($row['cercaojoizquierdoCYL']),1,0,'C',0);
    $pdf->Cell(20, 8, utf8_decode($row['cercaojoizquierdoEJE']),1,1,'C',0);
    $pdf->Ln(2);
    $pdf->Cell(20, 8, 'DP',1,0,'C',0);
    $pdf->Cell(20, 8, utf8_decode($row['cercaDP']),1,0,'C',0);
    $pdf->Ln(43);


    $pdf->Cell(75);
    $pdf->Cell(40, 10, 'TOTAL',0,1,'C',0);
    $pdf->Cell(75);
    $pdf->Cell(40, 10, utf8_decode('$'."".$row['total']),1,1,'C',0);
    $pdf->Ln(-5);
			
}

$pdf->Output();
?>