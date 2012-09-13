<?php require_once('Connections/conexion.php'); ?>
<?php
mysql_select_db($database_conexion, $conexion);
$query_bu = "SELECT * FROM empleado";
$bu = mysql_query($query_bu, $conexion) or die(mysql_error());
$row_bu = mysql_fetch_assoc($bu);
$totalRows_bu = mysql_num_rows($bu);
?>
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




 <form method="post" name="form1" id="form1" enctype="multipart/form-data" action="insertar_em.php" onSubmit="return validar()">
<br>   
 
<p align="center" class="Estilo3"><strong>REGISTROs DE EMPLEADOs</strong> 
 
</p>

<div align="center"><br>
    <br>
  
    <table  width="772" bgcolor="#FFA500" align="center" border="1" bordercolor="#FFA500">
      <tr>
        <td width="100"><div align="center"><strong>Nombre </strong></div></td>
        <td width="144"><label>
          <div align="center">
            <input name="nombre" type="text" id="nombre" />
          </div>
        </label></td>
        <td width="100"><div align="center">
          <p><strong>Apellido </strong></p>
        </div></td>
        <td width="144"><div align="center">
          <input name="apellido" type="text" id="apellido" />
        </div></td>
        
	  <tr>
		<td width="94"><div align="center">
          <p><strong> Cédula    </strong><strong>del empleado </strong></p>
          </div></td>
        <td width="150"><div align="center">
          <input name="cedula" type="text" id="cedula" />
        </div></td>
     
	 <td width="99"><div align="center"><strong>Sexo</strong></div></td>
        <td width="144"><div align="center">
          
		    <label>
		    <select name="sexo" id="sexo">
		      <option selected>Seleccionar</option>
		      <option value="masculino">Masculino</option>
		      <option value="femenino">femenino</option>
	        </select>
		    </label>
		    </div></td>
	  </tr>
	  <tr>
        
        <td width="102"><div align="center"><strong>Telefono</strong></div></td>
        <td width="145"><div align="center">
          <input name="telefono" type="text" id="telefono" />
        </div></td>
        <td width="92"><div align="center"><strong>Direccion </strong></div></td>
        <td width="150"><div align="center">
          <input name="direccion" type="text" id="direccion" />
        </div></td>
      </tr>

	  </tr>
    </table>
  <br>
  
    
  <br>
  <table align="center" border="1" bordercolor="#FFFFFF" width="572" bgcolor="#FFA500">
      <tr>
        <td width="90" valign="middle"><div align="center"><strong>Fecha de Ingreso</strong></div></td>
        <?php // formato de la fecha ano, mes y dia
              $hoy=date("Y-m-d");
            ?>
        <td width="155"><div align="center">
          <input type="text" id="fecha1" name="fecha" size="10" onKeyPress="return nonumeyletra(event)"readonly="readonly"/>
          <input type="image" src="calendario/calendario.gif" id="fecha" />
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
        <td width="122"><div align="center"><strong>Horario de Trabajo </strong></div></td>
        <td width="122"><div align="center">
          <label>
          <select name="horario" id="horario">
            <option>Seleccionar</option>
            <option value="diurno">Diurno</option>
            <option value="nocturno">Nocturno</option>
          </select>
          </label>
        </div></td>
        
      </tr>
<tr>
<td width="47"><div align="center"><strong>Cargo</strong></div></td>
        <td width="169"><div align="center">
          <input name="cargo" type="text" id="cargo" />
        </div></td>
  <td><div align="center"><strong>Fotografia</strong>
      <input type="hidden" id="titulo" name="titulo" >
      <input type="file" size="20" name="archivo" id="archivo">
  </div></td>
</tr>
</table>
 
  <br>

    <input name="submit" type="submit" value="Guardar">
</div>
 </form>





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