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


	if(!isset($_GET['pag']))
//paginacion
	{

	$pag=1;

	}else

	{

		$pag=$_GET['pag'];

	}

	$hasta=10000000;
	$desde=($hasta*$pag)-$hasta;
// consulta a la tabla informe_personal	
	
	$consulta="SELECT * FROM equipo where match (codigo_equipo,nombre_equipo,modelo) against ('$criterio*' IN BOOLEAN MODE)";
	$resultado=mysql_query($consulta,$enlace);


?>
 <center>
  <CAPTION>
</p>

<p><strong>Consulta </strong></p>
<p>&nbsp;</p>
<p>
  </CAPTION>
</p>
<table width="350"  border="8" align="center" class="tabla1"/>


<?PHP

		$i=0;
		$resultado = basedatos($consulta);
		$fila=mysql_num_rows($resultado);
		if ($fila ==0)
		{
		echo"El Equipo $criterio no se encuentra registrado";
		}
		else 
		 //echo "$fila";
		while ($row = mysql_fetch_row($resultado))
    {
             
                   $codigo_equipo=$row[0];
                   $nombre_equipo=$row[1];
                   $modelo=$row[2];
                   $marca=$row[3];
                   $descripcion=$row[4];
                   $fecha_ingreso=$row[5];
                   $cantidad=$row[6];
                   $estado=$row[7];
				   $titulo=$row[9];
          

				   $link2=$row[8];
                   ?>
     
      <div align="center">
	  <strong>Consulta Equipo</strong>
	  <table width="400" border="8" bordercolor="#CCCCCC" align="center">
        <tr><td><strong>codigo del equipo:</strong></td><td><?php echo "  $row[0]" ?></td></tr>
        <tr>
          <td><strong> Nombre</strong></td>
          <td><?php echo "  $row[1]" ?></td></tr>
        <tr><td><strong>Modelo</strong></td><td><?php echo "  $row[2]" ?></td></tr>
        <tr><td><strong>marca:</strong></td><td><?php echo "$row[3]" ?></td></tr>
        <tr><td><strong>descripcion:</strong></td><td><?php echo "  $row[4]" ?></td></tr>
        <tr><td><strong>fecha de ingreso a la empresa:</strong></td><td><?php echo "  $row[5]" ?></td></tr>
        <tr><td><strong>cantidad</strong></td><td><?php echo "  $row[6]" ?></td></tr>
        <tr><td><strong>Estado:</strong></td><td><?php echo "  $row[7]" ?></td></tr>
       <tr><td><strong>Foto</strong></td><td><?php echo "<a align ='center' target=_blank href='$link2'><img src='$row[9]' align ='center'  width='120'height='100'>" ?></td></tr><br /> </table>        
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

                   
                   mysql_free_result($resultado);
                   mysql_close ($enlace);



                   ?>


					 <!--Fin de la plantilla   -->
                                      
										
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