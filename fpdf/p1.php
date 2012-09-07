<?php
    include "coneccionbasedatosmysql.inc";
    $fecha_inicio = $_POST['fecha_inicio'];
	//declarando la variable $criterio
	$enlace =conectarbase();
	// $enlace se iguala a la funcion cenectarbase()
  
    
   $consulta = "SELECT * from odt  where fecha_inicio = '$fecha_inicio';";
  
  
 //  $consulta = "SELECT * from empleado where codigo_equipo = '$criterio';";
  // consulta a la tabla informe_personal
                   $resultado=basedatos($consulta);
                   $nro_fil = mysql_num_rows($resultado);

                   if($nro_fil == 0)
                   {

                   echo "<center><br><br><strong><center>No hay orden de Trabajo con Fecha $fecha_inicio Registrada <br> por favor valide sus datos.</center></strong></center><br></br><br></br>";
                   }else
                   {
                   while ($row = mysql_fetch_row($resultado)){
                   $codigo_odt=$row[0];
                   $empleado=$row[1];
                   $fecha_inicio=$row[2];
                   $fecha_final=$row[3];
				    $tipodemantenimiento=$row[4];
				    $equipo=$row[5];
				   $elemento=$row[6];
     
      
				   //$link2=$row[5];
                   ?>
     
      <div align="center">
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
		
    <!-- <tr><td><strong>Fotografia:</strong></td><td><?php echo "<a target=_blank href='$link2'><img src='$row[5]' width='120'height='100'></a>" ?></td></tr><br /> </table> -->       
       <!--echo "<td><a target=_blank href='$link2'><img src='$row[9]' width='120'height='100'></a></td></tr>";-->
	   
	   
	    <?php
                   }
                   ?>
      
        </tr>
        </table>
    <br>
        <br>
      </div>
      </td></tr>
    <div align="center">
    </div>

    <div align="center">
      </div>
      </form>
      </center>
      </table>

      <?php

                   }
                   mysql_free_result($resultado);
                   mysql_close ($enlace);



                   ?>