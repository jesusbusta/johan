<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
<head>
    <!--
    Created by Artisteer v3.0.0.39952
    Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Index</title>
    <meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />


    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="style.ie7.css" type="text/css" media="screen" /><![endif]-->

    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
<div id="art-main">
    <div class="art-header">
        <div class="art-header-clip">
        <div class="art-header-center">
            <div class="art-header-png"></div>
            <div class="art-header-jpeg"></div>
        </div>
        </div>
    <div class="art-header-wrapper">
    <div class="art-header-inner">
        <div class="art-headerobject"></div>
        <script type="text/javascript" src="swfobject.js"></script>
        <div id="art-flash-area">
        <div id="art-flash-container">
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="990" height="175" id="art-flash-object">
        	<param name="movie" value="container.swf" />
        	<param name="quality" value="high" />
        	<param name="scale" value="default" />
        	<param name="wmode" value="transparent" />
        	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.70&amp;framerate1=24&amp;loop=true&amp;wmode=transparent&amp;clip=images/flash.swf&amp;radius=40&amp;clipx=0&amp;clipy=-36&amp;initalclipw=900&amp;initalcliph=225&amp;clipw=990&amp;cliph=247&amp;width=990&amp;height=175&amp;textblock_width=0&amp;textblock_align=no&amp;hasTopCorners=true&amp;hasBottomCorners=true" />
            <param name="swfliveconnect" value="true" />
        	<!--[if !IE]>-->
        	<object type="application/x-shockwave-flash" data="container.swf" width="990" height="175">
        	    <param name="quality" value="high" />
        	    <param name="scale" value="default" />
        	    <param name="wmode" value="transparent" />
            	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.70&amp;framerate1=24&amp;loop=true&amp;wmode=transparent&amp;clip=images/flash.swf&amp;radius=40&amp;clipx=0&amp;clipy=-36&amp;initalclipw=900&amp;initalcliph=225&amp;clipw=990&amp;cliph=247&amp;width=990&amp;height=175&amp;textblock_width=0&amp;textblock_align=no&amp;hasTopCorners=true&amp;hasBottomCorners=true" />
                <param name="swfliveconnect" value="true" />
        	<!--<![endif]-->
        		<div class="art-flash-alt"><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></div>
        	<!--[if !IE]>-->
        	</object>
        	<!--<![endif]-->
        </object>
        </div>
        </div>
        <script type="text/javascript">    swfobject.switchOffAutoHideShow(); swfobject.registerObject("art-flash-object", "9.0.0", "expressInstall.swf");</script>
        <div class="art-logo">
                 <h1 class="art-logo-name"><a href="./index.html">Mantenimiento Preventivo y Correctivode equipos C.A</a></h1>
                         <h2 class="art-logo-text">Aumentando la organización y el control empresarial</h2>
                </div>
    </div>
    </div>
    </div>
    <div class="cleared reset-box"></div>
<div class="art-nav">
<div class="art-nav-outer">
<div class="art-nav-wrapper">
<div class="art-nav-inner">
	


	
	<?php include "menu.php" ?>		
	
	
</div>
</div>
</div>
</div>
<div class="cleared reset-box"></div>
<div class="art-sheet">
        <div class="art-sheet-tl"></div>
        <div class="art-sheet-tr"></div>
        <div class="art-sheet-bl"></div>
        <div class="art-sheet-br"></div>
        <div class="art-sheet-tc"></div>
        <div class="art-sheet-bc"></div>
        <div class="art-sheet-cl"></div>
        <div class="art-sheet-cr"></div>
        <div class="art-sheet-cc"></div>
        <div class="art-sheet-body">
            <div class="art-content-layout">
                <div class="art-content-layout-row">
                    <div class="art-layout-cell art-content">
<div class="art-post">
    <div class="art-post-body">
<div class="art-post-inner art-article">
                                <div class="art-postmetadataheader">
                                        <h2 class="art-postheader">
                   <div align="center">
				   
				   <!--Inicio de la plantilla   -->



      <?php
    include "coneccionbasedatosmysql.inc";
    $criterio = $_POST['criterio'];
	//declarando la variable $criterio
	$enlace =conectarbase();
	// $enlace se iguala a la funcion cenectarbase()
  
    
   $consulta = "SELECT * from empleado where cedula = '$criterio';";
  
  
 //  $consulta = "SELECT * from empleado where codigo_equipo = '$criterio';";
  // consulta a la tabla informe_personal
                   $resultado=basedatos($consulta);
                   $nro_fil = mysql_num_rows($resultado);

                   if($nro_fil == 0)
                   {

                   echo "<center><br><br><strong><center>El empleado $criterio no existe en nuestra base de datos <br> por favor valide sus datos.</center></strong></center><br></br><br></br>";
                   }else
                   {
                   while ($row = mysql_fetch_row($resultado)){
                   $cedula=$row[0];
                   $nombre=$row[1];
                   $apellido=$row[2];
                   $cargo=$row[3];
                   $telefono=$row[4];
                   $direccion=$row[5];
                   $sexo=$row[6];
                   $fecha=$row[7];
				   $horario=$row[8];
				    $horas=$row[9];
                   $titulo=$row[10];
          

				   $link2=$row[10];
                   ?>
     
      <div align="center">
	  <strong>MODIFICAR EMPLEADO</strong>
	  <table width="400" border="8" bordercolor="#CCCCCC" align="center">
        <tr><td><strong>Nombre del empleado:</strong></td><td><?php echo "  $row[1]" ?></td></tr>
        <tr>
          <td><strong>Apellido </strong><strong>del empleado:</strong></td>
          <td><?php echo "  $row[2]" ?></td></tr>
        <tr><td><strong>C�dula    </strong><strong>del empleado:</strong></td><td><?php echo "  $row[0]" ?></td></tr>
        <tr><td><strong>Sexo:</strong></td><td><?php echo "$row[6]" ?></td></tr>
        <tr><td><strong>Telefono:</strong></td><td><?php echo "  $row[4]" ?></td></tr>
        <tr><td><strong>Direccion:</strong></td><td><?php echo "  $row[5]" ?></td></tr>
        <tr><td><strong>Fecha de Ingreso:</strong></td><td><?php echo "  $row[7]" ?></td></tr>
        <tr><td><strong>Horario de Trabajo:</strong></td><td><?php echo "  $row[8]" ?></td></tr>
        <tr><td><strong>Cargo:</strong></td><td><?php echo "  $row[3]" ?></td></tr>	
		 <tr><td><strong>Horas:</strong></td><td><?php echo "  $row[9]" ?></td></tr>			
		  
        <tr><td><strong>Foto del Empleado:</strong></td><td><?php echo "<a align ='center' target=_blank href='$link2'><img src='$row[10]' align ='center'  width='120'height='100'></a>" ?></td></tr><br /> </table>        
        <?php
                   }
                   ?>
        
 <form action="modificar_empleado.php" method="post" enctype="multipart/form-data" name="form2" id="form2" onSubmit="return validar2()"  >
  
        
  
    
        <table  width="526" bgcolor="#BDBDBD" align="center" border="1" bordercolor="#FFFFFF">
          <tr>
            <td width="66"><div align="center" class="Estilo5">Nombre del Empleado </div></td>
          <td width="85"><label>
            <div align="center">
              <input name="nombre" type="text" id="nombre"  value="<?php echo $nombre?>" size="10" maxlength="30" />
            </div>
          </label></td>
          <td width="66"><div align="center" class="Estilo5"> Apellido del Empleado </div></td>
          <td width="92"><div align="center">
            <input name="apellido" type="text" id="apellido"  value="<?php echo $apellido ?>" size="10" maxlength="50" />
            </div></td>
          <td width="86"><div align="center" class="Estilo5"> Cedula </div></td>
          <td width="91"><div align="center">
            <input name="cedula" type="text" id="cedula"  value="<?php echo $cedula ?>" size="10" maxlength="20" />
            </div></td>
        </tr>
        </table>
    <br>
        <br>
        
        <table width="651" bgcolor="#BDBDBD" border="1" bordercolor="#FFFFFF">
          <tr>
            <td width="61"><div align="center" class="Estilo5">Sexo</div></td>
          <td width="109"><div align="center">
            <select name="sexo" id="sexo">
		      <option selected><?php echo $sexo ?></option>
		      <option value="masculino">Masculino</option>
		      <option value="femenino">femenino</option>
	        </select>
	              </div></td>
          <td width="69"><div align="center" class="Estilo5">Telefono</div></td>
          <td width="124"><div align="center">
            <label for="textarea"></label>
             <input name="telefono" type="text" id="telefono"  value="<?php echo $telefono ?>" size="10" maxlength="20"/>
			
            
            </div></td> 
          <td width="91"><div align="center" class="Estilo5">Direccion </div></td>
          <td width="157"><div align="center">
            <textarea rows="2" cols="10" name="direccion" id="direccion"><?php echo $direccion ?></textarea>
            </div></td> 
        </tr>
        </table>
    <br>
        <br>
        <table  border="1" bordercolor="#FFFFFF" width="772" bgcolor="#BDBDBD">
          <tr>
            <td width="95"><div align="center" class="Estilo5">Fecha de ingreso</div></td>
          <?php // formato de la fecha ano, mes y dia
              $hoy=date("Y-m-d");
            ?>
            <td width="169"><div align="center">
              <input type="text" id="fecha1" name="fecha" size="10" value="<?php echo $fecha?>" onkeypress="return nonumeyletra(event)"readonly="readonly"/>
              <input type="image" src="calendario/calendario.gif" id="fecha"  />
              <input type="hidden" name="fechatemp1" id="fechatemp" value="<?php echo $hoy?>" size="20" />
              <script type="text/javascript">

					//importante colocar esto cada vez que se utiliza el calendario y adaptarlo al input que se va a utilizar
 					Calendar.setup
						(
    							{
      								inputField  : "fecha1", //nombre del id de del campo
      								ifFormat    : "%Y-%m-%d",
      								button      : "fecha" //nombre del id del campo boton o imagen que saca el calendario
    							}
  						);

				</script>
            </div></td>
          <!-- combo 1 municipio -->
            <td width="65"><div align="center" class="Estilo5">Horario de Trabajo</div></td>
          <td width="140"><div align="center">
            <select name="horario" id="horario">
            <option selected><?php echo $horario ?></option>
            <option value="diurno">Diurno</option>
            <option value="nocturno">Nocturno</option>
          </select>
            </div></td>
          <td width="92"><div align="center" class="Estilo5">Cargo </div></td>
          <td width="171"><div align="center">
  <input name="cargo" type="text" id="cargo" value="<?php echo $cargo ?>" />             
            </div></td>
        </tr>
              </table>
      <p>&nbsp;
        <strong>FOTO DEL EQUIPO</strong>
<br>
        <strong><a href="modificar_foto_empleado1.php?cedula=<?php echo $cedula?>">Si desea Modificar la Foto pulse aqui</a></strong>

        <input type="hidden" name="cedula" id="cedula" value="<?php echo $cedula ?>"> 
           
</div>
<tr><td colspan="2"><div align="center"><strong><br>

Presione el bot&oacuten continuar para guardar los cambios</strong></div></td></tr>
    <div align="center">
    </div>
<tr><td colspan="2"><div align="center">
      <input name="submit" type="submit" value="Continuar">
</div></td></tr>
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
					 <!--Fin de la plantilla   -->
                                        </div>
										
										</h2>
                    <div class="cleared"></div>
                                                        </div>
                                <div class="art-postcontent">

<p><br /></p>


                </div>
                <div class="cleared"></div>
                </div>

		<div class="cleared"></div>
    </div>
</div>

                      <div class="cleared"></div>
                    </div>
                </div>
            </div>
            <div class="cleared"></div>
            <div class="art-footer">
                <div class="art-footer-t"></div>
                <div class="art-footer-l"></div>
                <div class="art-footer-b"></div>
                <div class="art-footer-r"></div>
                <div class="art-footer-body">
                            <div class="art-footer-text">
                                
<p><a href="#">Link1</a> | <a href="#">Link2</a> | <a href="#">Link3</a></p>
<p>Copyright © 2011. All Rights Reserved.</p>


                                                            </div>
                    <div class="cleared"></div>
                </div>
            </div>
    		<div class="cleared"></div>
        </div>
    </div>
    <div class="cleared"></div>
    <p class="art-page-footer"><a href="http://www.artisteer.com/?p=website_templates">Website Template</a> created with Artisteer.</p>
</div>

</body>
</html>