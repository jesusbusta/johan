<?php
require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

include "coneccionbasedatosmysql.inc";
    $fecha_inicio = $_POST['fecha_inicio'];
	//declarando la variable $criterio
	$enlace =conectarbase();
	// $enlace se iguala a la funcion cenectarbase()
  
  
  $consulta = "SELECT * from odt  where fecha_inicio = '$fecha_inicio';";
  
	  <strong>Consulta ODT</strong>
	  <table width="400" border="8" bordercolor="#CCCCCC" align="center">
        <tr><td><strong>N° de ODT:</strong></td><td><?php echo "  $row[0]" ?></td></tr>
        <tr>
          <td><strong> Empleado</strong></td>
          <td><?php echo "  $row[1]" ?></td></tr>
        <tr><td><strong>fecha de Inicio</strong></td><td><?php echo "  $row[2]" ?></td></tr>
        <tr><td><strong>Fecha de finalizacion:</strong></td><td><?php echo "$row[3]" ?></td></tr>
        <tr><td><strong>Tipo de Mantenimiento:</strong></td><td><?php echo "  $row[4]" ?></td></tr>
		<tr><td><strong>Equipo:</strong></td><td><?php echo "  $row[5]" ?></td></tr>
		<tr><td><strong>Elemento:</strong></td><td><?php echo "  $row[6]" ?></td></tr>
		
    <tr><td><strong>Fotografia:</strong></td><td><?php echo "<a target=_blank href='$link2'><img src='$row[5]' width='120'height='100'></a>" ?>
	$pdf->Cell(40,10,'¡Hola, rata!');
  


    

$pdf->Output();
?>