<?php
require('fpdf.php');

// Tabla simple
function BasicTable($header, $data)
{
    // Cabecera
    foreach($header as $col)
        $this->Cell(40,7,$col,1);
    $this->Ln();
    // Datos
    foreach($data as $row)
    {
        foreach($row as $col)
            $this->Cell(40,6,$col,1);
        $this->Ln();
    }
}
$codigo_odt=$_REQUEST['codigo_odt'];
include "coneccionbasedatosmysql.inc";
$enlace =conectarbase();

 $consulta = "(SELECT * from odt  where codigo_odt = '$codigo_odt')";
 $resultado=basedatos($consulta);
 $row = mysql_fetch_row($resultado);
 $pdf=new FPDF();
 $pdf-> AddPage();
 $pdf->SetFont('Arial','B',16);
 $pdf->Cell(60,10,$row[1],0,1,'C');
 
 
 $pdf->Cell(60,10,$row[0],0,1,'C');   
        
 //Encabezado de la Tabla
$Y_Fields_Name_position = 60;
//Archivos que se colocaran debajo de la cabecera
$Y_Table_Position = 66;
 //Lineas del Formulario
$pdf->SetFillColor(232,232,232);
// Primera Fila
$pdf->Line(6,27,204,27);// Linea horizontal
$pdf->Line(80,27,80,37);// Linea Vertical
$pdf->Cell(60,10,$row[1],0,1,'C');
$pdf->Line(6,37,204,37); // Linea Horizontal
$pdf->Line(107,27,107,37);// Linea Vertical
$pdf->Line(137,27,137,37);// Linea Vertical
$pdf->Line(175,27,175,37);// Linea Vertical

$pdf->Line(6,274,202,274);// Linea horizontal  Final
// Segunda Fila
$pdf->Line(30,43,30,50); // Linea Vertical

$pdf->Line(49,43,49,50); // Linea Vertical
$pdf->Line(65,47,65,50); // Linea Vertical
$pdf->Line(81,43,81,50); // Linea Vertical
$pdf->Line(94,43,94,50); // Linea Vertical
$pdf->Line(105,43,105,50); // Linea Vertical
$pdf->Line(182,43,182,50); // Linea Vertical
$pdf->Line(6,50,204,50); // Linea Horizontal
$pdf->Cell(60,10,$row[0],0,1,'C'); 
 $pdf->output();
 ?>
 
 
 