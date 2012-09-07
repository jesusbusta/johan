    <?php
	
	require_once('class.ezpdf.php');
    $pdf =& new Cezpdf('a4');
    $pdf->selectFont('../fonts/courier.afm');
    $pdf->ezSetCmMargins(1,1,1.5,1.5);
?>