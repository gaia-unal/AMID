<?php
require('public/vendor/fpdf182/fpdf.php');



// if(isset($evaluacion)){
    
//     foreach($evaluacion->result() as $eva){
//         echo "hello";
//     }
// }
// public$name=$this->session->userdata('name');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('public/assets/img/logo2.png',10,8,60);
    $this->Image('public/assets/img/logo.png',160,4,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    
    $this->Ln(30);
    
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Reporte de Calificaciones',0,1,'C');
    
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$i=1;


 // Salto de línea
 $pdf->Ln(5);
$pdf->SetFont('Arial','B',12);
    $pdf->Cell(44,10,'Nombre:',0,1,'C');
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(84,10,utf8_decode($nombre.' '.$apellido),0,0,'C');
    // Salto de línea
    $pdf->Ln(20);

    $pdf->SetFont('Times','B',12);
    $pdf->Cell(15);
    $pdf->SetFillColor(11, 73, 190);
    $pdf->SetTextColor(255,255,255);
    // $pdf->SetDrawColor(128,0,0);
    // $pdf->SetLineWidth(.3);

    $pdf->Cell(40,7,utf8_decode('Fecha'),       1,0,'C',1);
    $pdf->Cell(40,7,utf8_decode('Evaluación'),  1,0,'C',1);
    $pdf->Cell(40,7,utf8_decode('Desempeño'),   1,0,'C',1);
    $pdf->Cell(40,7,utf8_decode('Calificación'),1,1,'C',1);

    $pdf->SetFillColor(11, 73, 190);
    $pdf->SetTextColor(0,0,0);

$pdf->SetFont('Times','',12);

foreach($evaluacion->result() as $eva){
    $pdf->Cell(15);
    $pdf->Cell(40,7,$eva->fecharealizacion,1,0,'C',0);
                        $pdf->Cell(40,7,$i,1,0,'C',0);
    $pdf->Cell(40,7,$eva->desempeñounidad, 1,0,'C',0);
    $pdf->Cell(40,7,$eva->notaevaluacion,  1,1,'C',0);
    
    $i++;
}


$pdf->Output();
?>