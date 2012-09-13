<?php require_once('Connections/consultaequipo.php'); ?>
<?php
mysql_select_db($database_consultaequipo, $consultaequipo);
$query_equi = "SELECT * FROM empleado";
$equi = mysql_query($query_equi, $consultaequipo) or die(mysql_error());
$row_equi = mysql_fetch_assoc($equi);
$totalRows_equi = mysql_num_rows($equi);

mysql_select_db($database_consultaequipo, $consultaequipo);
$query_equipo = "SELECT * FROM equipo";
$equipo = mysql_query($query_equipo, $consultaequipo) or die(mysql_error());
$row_equipo = mysql_fetch_assoc($equipo);
$totalRows_equipo = mysql_num_rows($equipo);

mysql_select_db($database_consultaequipo, $consultaequipo);
$query_elemento = "SELECT * FROM elementos_equipo";
$elemento = mysql_query($query_elemento, $consultaequipo) or die(mysql_error());
$row_elemento = mysql_fetch_assoc($elemento);
$totalRows_elemento = mysql_num_rows($elemento);

mysql_select_db($database_consultaequipo, $consultaequipo);
$query_empleado = "SELECT * FROM empleado";
$empleado = mysql_query($query_empleado, $consultaequipo) or die(mysql_error());
$row_empleado = mysql_fetch_assoc($empleado);
$totalRows_empleado = mysql_num_rows($empleado);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
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
	<style type="text/css">
@import url(calendario/calendar-blue.css);</style>
<script type="text/javascript" src="calendario/calendar.js"></script>
<script type="text/javascript" src="calendario/calendar-es.js"></script>
<script type="text/javascript" src="calendario/calendar-setup.js"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script language="javascript" src="validacion.js"></script> 
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


 <form method="post" name="form1" id="form1" enctype="multipart/form-data" action="odt2.php" onsubmit="return validar()">
<br>   
 
<p align="center" class="Estilo3 Estilo1"><strong>Partes de equipos</strong></p>

<div align="center"><br>


  <table  width="20" bgcolor="#CCCC99" align="center" border="5" bordercolor="#FFFFFF">
    
      <td width="50"><div align="center"><strong>N° de ODT</strong></div></td>
      
	  <td width="80">
          <div align="center">
            <input name="codigo_odt" type="text" id="codigo_odt" size="20" />
	  <td></td>
      <td width="83"><div align="center"><strong>Empleado Asignado</strong></div></td>
      <td>        </td>
	  
	  <td width="50"><label>empleado
	  
	 <select name="empleado">
	   <?php
do {  
?>
	   <option value="<?php echo $row_empleado['cedula'],' ',$row_empleado['apellido']?>"<?php if (!(strcmp($row_empleado['cedula'], $row_empleado['cedula']))) {echo "selected=\"selected\"";} ?>><?php echo $row_empleado['cedula'],'--',$row_empleado['apellido']?></option>
	   <?php
} while ($row_empleado = mysql_fetch_assoc($empleado));
  $rows = mysql_num_rows($empleado);
  if($rows > 0) {
      mysql_data_seek($empleado, 0);
	  $row_empleado = mysql_fetch_assoc($empleado);
  }
?></select>
	
	  
    </tr>
	<p>&nbsp;</p>
        <td width="90" valign="middle"><div align="center"><strong>Fecha de Ingreso</strong></div></td>
        <?php // formato de la fecha ano, mes y dia
              $hoy=date("Y-m-d");
            ?>
        <td width="155"><div align="center">
            <input type="text" id="fechai" name="fecha_inicio" size="10" onkeypress="return nonumeyletra(event)"readonly="readonly"/>
            <input name="image" type="image" id="fecha" src="calendario/calendario.gif" />
            <input type="hidden" name="fechatemp1" id="fechatemp" value="<?php echo $hoy?>" size="20" />
            <script type="text/javascript">

					//importante colocar esto cada vez que se utiliza el calendario y adaptarlo al input que se va a utilizar
 					Calendar.setup
						(
    							{
      								inputField  : "fechai", //nombre del id de del campo
      								ifFormat    : "%d-%m-%Y",
      								button      : "fecha" //nombre del id del campo boton o imagen que saca el calendario
    							}
  						);

				</script>
        </div></td>
        <!-- combo 1 municipio -->
		<td></td>
        <td width="90" valign="middle"><div align="center"><strong>Fecha Final</strong></div></td>
		<td></td>
        <?php // formato de la fecha ano, mes y dia
              $hoy=date("Y-m-d");
            ?>
        <td width="155"><div align="center">
            <input type="text" id="fechaf" name="fecha_final" size="10" onkeypress="return nonumeyletra(event)"readonly="readonly"/>
            <input name="image" type="image" id="fecha2" src="calendario/calendario.gif" />
            <input type="hidden" name="fechatemp1" id="fechatemp" value="<?php echo $hoy?>" size="20" />
            <script type="text/javascript">

					//importante colocar esto cada vez que se utiliza el calendario y adaptarlo al input que se va a utilizar
 					Calendar.setup
						(
    							{
      								inputField  : "fechaf", //nombre del id de del campo
      								ifFormat    : "%d-%m-%Y",
      								button      : "fecha2" //nombre del id del campo boton o imagen que saca el calendario
    							}
  						);

				</script>
        </div></td>
		
        <!-- combo 1 municipio -->
      </tr>
	  </div>
	  </div>
	  </div>
 
	  
	
	  <center>
      <td><div align="center"><strong>Tipo de mantenimiento</strong></div>
       <div align="center"> <input name="tipodemantenimiento" type="radio" value="preventivo"/>
    Preventivo</div> </label>
        <div align="center"><input type="radio" name="tipodemantenimiento" value="correctivo" />
   Correctivo</div></label></td>
    </div>
	 
   <td width="150"><div align="center">
          <label><strong><br />
          <br />
          Equipo</strong>


<select name="equipo" id="equipo">
  <?php
do {  


?>
  <option value="<?php echo $row_equipo['codigo_equipo'],$row_equipo['nombre_equipo']?>"<?php if (!(strcmp($row_equipo['codigo_equipo'], $row_equipo['codigo_equipo']))) {echo "selected=\"selected\"";} ?>><?php echo $row_equipo['codigo_equipo'],'   | |   ',$row_equipo['nombre_equipo']?></option>
            <?php
} while ($row_equipo = mysql_fetch_assoc($equipo));
  $rows = mysql_num_rows($equipo);
  if($rows > 0) {
      mysql_data_seek($equipo, 0);
	  $row_equipo = mysql_fetch_assoc($equipo);
  }
?>
          </select>
          </label>
	      <p>&nbsp;</p>
	      <p>&nbsp;</p>
	    </div></td>
		<td></td>
	
      <td width="83"><div align="center"><strong>Componente de equipos </strong>
          <label>          </label>
		  </div>
	  <td></td>
		  <td><table width="200">
          
		  
		  <tr>		  </tr>
       
	    </table>
        
            <label>
            <select name="elemento" id="elemento">
              <?php
do {  
?>
              <option value="<?php echo $row_elemento['cod_elemento']?>"<?php if (!(strcmp($row_elemento['cod_elemento'], $row_elemento['cod_elemento']))) {echo "selected=\"selected\"";} ?>><?php echo $row_elemento['cod_elemento'], ' |   | ',$row_elemento['nombre_elemento'] ?></option>
              <?php
} while ($row_elemento = mysql_fetch_assoc($elemento));
  $rows = mysql_num_rows($elemento);
  if($rows > 0) {
      mysql_data_seek($elemento, 0);
	  $row_elemento = mysql_fetch_assoc($elemento);
  }
?>
            </select>
            </label>	    </tr>
<tr>
<td><span class="Estilo2"> <center>Falla: 
</span></td>
	<td colspan="5"> <center><textarea name="falla" cols="30" rows=""></textarea></td>
	</tr>
  </table>
   <table  width="20" bgcolor="#CCCC99" align="center" border="5" bordercolor="#FFFFFF">
  
	   
   </table>
  <br>

    <input name="submit" type="submit" value="Guardar">
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
<?php
mysql_free_result($equi);

mysql_free_result($equipo);

mysql_free_result($elemento);

mysql_free_result($empleado);
?>