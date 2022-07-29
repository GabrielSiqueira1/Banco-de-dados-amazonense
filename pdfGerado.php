<?php	

	session_start();
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

	
	$html = '<table style="width: 100%;
	align-items: center;
	align-content: center;
	margin-top: 50px;
    text-align: center;
    border-collapse:collapse;" border=1>';	
	$html .= '<thead style="background:#D3D3D3;
    border: solid 1px;
    border-color: #D3D3D3;">';
	$html .= '<tr>';
	if($_SESSION["counterUm"]==0){
		$html .= '<th style="height: 30px;"><b>'.$value1.'</b></th>';
	}
	if($_SESSION["counterDois"]==0){
		$html .= '<th style="height: 30px;"><b>'.$value2.'</b></th>';
	}
	if($_SESSION["counterTres"]==0){
		$html .= '<th style="height: 30px;"><b>'.$value3.'</b></th>';
	}
	$html .= '</tr>';
	$html .= '</thead>';
	$html .= '<tbody>';
	
	for ($i = 0; $i < 1192; $i++) {

	    $html .= '<tr>';
	    if($_SESSION["counterUm"]==0){
			$html .= '<td style="height: 30px;>'.$dado1[$i].'</td>';
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
	$html .= '</tbody>';
	$html .= '</table';

	
	//referenciar o DomPDF com namespace
	use Dompdf\Dompdf;

	// include autoloader
	require_once("dompdf/autoload.inc.php");

	//Criando a Instancia
	$dompdf = new DOMPDF();
	// Carrega seu HTML

	$dompdf->load_html('
			<h1 style="text-align: center;">Relatório das tabelas escolhidas</h1>
			<p style="text-align: justify;
        line-height: 25px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam convallis sit amet leo at interdum. Etiam a dapibus mi. Mauris facilisis molestie mattis. Duis consequat arcu nunc, ac maximus lectus pharetra faucibus. Proin viverra ornare justo at dictum. Nullam et consequat velit. Donec imperdiet condimentum ligula, id faucibus mauris sollicitudin sit amet. Donec vel tempor enim. Vestibulum eget neque non neque efficitur congue. In hac habitasse platea dictumst. Cras turpis lorem, pulvinar eget lacus eget, dapibus fermentum leo.</p>
			'. $html .'
		');
	$dompdf->set_option('isRemoteEnabled', TRUE);
	//Renderizar o html
	$dompdf->render();

	//Exibibir a página
	$dompdf->stream(
		"pdfTabelas.pdf", 
		array(
			"Attachment" => false //Para realizar o download somente alterar para true
		)
	);
?>