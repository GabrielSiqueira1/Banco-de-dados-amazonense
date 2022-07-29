<?php
	session_start();
	$contadorGlobal = 0;
	include_once("class/cx.php");
	$dado1 = array();
	$dado2 = array();
	$dado3 = array();
	foreach ($_SESSION["titulo1"] as $titulo => $value5) {
		$value1 = $value5;
	}
	foreach ($_SESSION["titulo2"] as $titulo => $value6) {
		$value2 = $value6;
	}
	foreach ($_SESSION["titulo3"] as $titulo => $value7) {
		$value3 = $value7;
	}
	foreach ($_SESSION["dados1"] as $dado => $value8) {
		$dado1[] = $value8;
	}	
	foreach ($_SESSION["dados2"] as $dado => $value9) {
		$dado2[] = $value9;
	}	
	foreach ($_SESSION["dados3"] as $dado => $value10) {
		$dado3[] = $value10;
	}
	// Configurações header para forçar o download
	header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
	header ("Cache-Control: no-cache, must-revalidate");
	header ("Pragma: no-cache");
	header('Content-Type: application/octet-stream');
	header ("Content-type: application/x-msexcel");
	header ("Content-Disposition: attachment; filename=\"dadosSelecionados.xls\"" );
	header ("Content-Description: PHP Generated Data" );
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dados</title>
</head>
<body>
	<?php
	if($_SESSION["counterUm"]==0){
		$contadorGlobal++;
	}
	if($_SESSION["counterDois"]==0){
		$contadorGlobal++;
	}
	if($_SESSION["counterTres"]==0){
		$contadorGlobal++;
	}
	$arquivo = "dadosSelecionados.xls"; 
	$html = '';
	$html .= '<table border="1">';
	$html .= '<tr>';
	$html .= '<td colspan="$contadorGlobal">Dados Selecionados</tr>';
	$html .= '</tr>';
	
	
	$html .= '<tr>';
	if($_SESSION["counterUm"]==0){
		$html .= '<td><b>'.$value1.'</b></td>';
	}
	if($_SESSION["counterDois"]==0){
		$html .= '<td><b>'.$value2.'</b></td>';
	}
	if($_SESSION["counterTres"]==0){
		$html .= '<td><b>'.$value3.'</b></td>';
	}
	$html .= '</tr>';

	for ($i = 0; $i < 1192; $i++) {

	    $html .= '<tr>';
	    if($_SESSION["counterUm"]==0){
			$html .= '<td>'.$dado1[$i].'</td>';
		}
		if($_SESSION["counterDois"]==0){
			$html .= '<td>'.$dado2[$i].'</td>';
		}
		if($_SESSION["counterTres"]==0){
			$html .= '<td>'.$dado3[$i].'</td>';
		}
		$html .= '</tr>';
		;

	}
	// Envia o conteúdo do arquivo
	echo $html;
	exit; ?>
</body>
</html>