<?php

session_start();
include ("class/cx.php"); // conexão

$counter1 = "1";
$counter2 = "1";
$counter3 = "1";

/* Um vetor invertido. Utiliza o valor de $selected e converte novamente para a variável estabelecida no index.php */ 
$os = array(
	"Origem geral" => "origem_geral",
    "Número da pesquisa"  => "num_pesquisa",
    "ID" => "ID",
    "Formulário" => "formulario",
    "Pesquisador" => "pesquisador",
    "Supervisor" => "supervisor",
    "Codificador" => "codificador",
    "Embarcação" => "embarcacao",
    "Armador" => "armador",
    "Data" => "data",
    "Horário Inicial" => "hora_inicio",
    "Horário Final" => "hora_fim",
    "Origem" => "origem",
    "Destino" => "destino",
    "Idade" => "idade",
    "Residência" => "residencia",
    "Outra residência" => "outra_residencia",
    "Gênero" => "genero",
    "Grau de instrução" => "grau_instrucao",
    "Tipo de imóvel" => "tipo_imovel",
    "Outro tipo de imóvel" => "outro_tipo_imovel",
    "Tem geladeira?" => "geladeira",
    "Onde dorme?" => "habito_dormir",
    "Dorme em outro lugar?" => "outro_habito_dormir",
    "Preço da passagem" => "preco_passagem",
    "Renda Familiar" => "renda_familiar",
    "Forma de adquirir a passagem" => "forma_adq_passagem",
    "Outra forma de adquirir a passagem" => "outra_forma_adq_passagem",
    "Valor da doação" => "quanto_doacao",
    "Viaja novamente?" => "viagem_de_novo",
    "Conhece outros barcos" => "conhece_outros_barcos",
    "Quais outros barcos você conhece" => "conhece_outros_barcos_quais",
    "Local de compra de passagem" => "local_compra_passagem",
    "Qual local de compra de passagens" => "local_compra_passagem_qual",
    "Tempo embarcado" => "tempo_embarcado",
    "Frequência de viagem" => "frequencia_viagem",
    "Relação dos usuários que usam avião" => "usa_aviao",
    "Relação de compras com antecendência" => "compra_antecedencia",
    "Compra com quanto de antecedência" => "compra_antecedencia_qual",
    "Relação com épocas do ano" => "relacao_epoca_ano",
    "Relação de quais épocas do ano" => "relacao_epoca_ano_qual",
    "Relação com épocas dos meses" => "relacao_epoca_mes",
    "Relação de quais épocas do mes" => "relacao_epoca_mes_qual",
    "Volumes pequenos" => "volumes_peq",
    "Volumes médioss" => "volumes_medio",
    "Volumes grandes" => "volumes_grandes",
 	"Carga pequena" => "carga_pequena",
 	"Carga média" => "carga_media",
 	"Carga grande" => "carga_grande",
 	"Ida" => "ida",
 	"Acomodação escolhida" => "acomodacao_escolhida",
 	"Motivo da viagem" => "motivo_viagem",
 	"Outros motivos para viagem" => "motivo_viagem_outros",
 	"Viagem em grupo" => "viagem_grupo",
 	"Relação do grupo com o usuário" => "viagem_grupo_qual",
 	"Outras relações do grupo com o usuário" => "viagem_grupo_qual_outros",
 	"Número de pessoas" => "numero_pessoas",
 	"Avaliação dos preços" => "avaliacao_preco",
 	"Avaliação da duração das viagens" => "duracao_viagem",
 	"Avaliação da qualidade da alimentação" => "qualidade_alimentacao",
 	"Nível de conforto" => "nivel_conforto",
 	"Avaialiação da higiene" => "higiene",
 	"Avaialiação da segurança" => "segurança",
 	"Instrução de segurança" => "instrucao_seguranca",
 	"Problemas para embarcar" => "problemas_embarcação",
 	"Problemas nos terminais" => "problemas_terminais",
 	"Problemas na viagem" => "problemas_viagem",
 	"Origem do passageiro" => "origem_passageiro",
 	"Destino do passageiro" => "destino_passageiro",
 	"Tempo de permanência" => "tempo_permanencia",
 	"Embarcado" => "embarcado",
	);

/* Utiliza a variável do index e a converte para um título do banco de dados */ 
$arr = array(
    "origem_geral" => "ORIGEM_GERAL",
    "num_pesquisa"  => "PESQUISA_NUMERO",
    "ID" => "ID",
    "formulario" => "FORMULARIO",
    "pesquisador" => "PESQUISADOR",
    "supervisor" => "SUPERVISOR",
    "codificador" => "CODIFICADOR",
    "embarcacao" => "EMBARCACAO",
    "armador" => "ARMADOR",
    "data" => "DATA",
    "hora_inicio" => "HORAINICIO",
    "hora_fim" => "HORAFIM",
    "origem" => "ORIGEM",
    "destino" => "DESTINO",
    "idade" => "IDADE",
    "residencia" => "RESIDENCIA",
    "outra_residencia" => "OUTRA_RESIDENCIA",
    "genero" => "GENERO",
    "grau_instrucao" => "GRAU_INSTRUCAO",
    "tipo_imovel" => "TIPO_IMOVEL",
    "outro_tipo_imovel" => "OUTRO_TIPO_IMOVEL",
    "geladeira" => "GELADEIRA",
    "habito_dormir" => "HABITO_DORMIR",
    "outro_habito_dormir" => "OUTRO_HABITO_DORMIR",
    "preco_passagem" => "PRECO_PASSAGEM",
    "renda_familiar" => "RENDA_FAMILIAR",
    "forma_adq_passagem" => "FORMA_ADQ_PASSAGEM",
    "outra_forma_adq_passagem" => "OUTRA_FORMA_ADQ_PASSAGEM",
    "quanto_doacao" => "QUANTO_DOACAO",
    "viagem_de_novo" => "VIAGEM_DE_NOVO",
    "conhece_outros_barcos" => "CONHECE_OUTROS_BARCOS",
    "conhece_outros_barcos_quais" => "CONHECE_OUTROS_BARCOS_QUAIS",
    "local_compra_passagem" => "LOCAL_COMPRA_PASSAGEM",
    "local_compra_passagem_qual" => "LOCAL_COMPRA_PASSAGEM_QUAL",
    "tempo_embarcado" => "TEMPO_EMBARCADO",
    "frequencia_viagem" => "FREQUENCIA_VIAGEM",
    "usa_aviao" => "USA_AVIAO",
    "compra_antecedencia" => "COMPRA_ANTECEDENCIA",
    "compra_antecedencia_qual" => "COMPRA_ANTECEDENCIA_QUAL",
    "relacao_epoca_ano" => "RELACAO_EPOCA_ANO",
    "relacao_epoca_ano_qual" => "RELACAO_EPOCA_ANO_QUAL",
    "relacao_epoca_mes" => "RELACAO_EPOCA_MES",
    "relacao_epoca_mes_qual" => "RELACAO_EPOCA_MES_QUAL",
    "volumes_peq" => "VOLUMES_PEQ",
    "volumes_medios" => "VOLUMES_MEDIOS",
    "volumes_grandes" => "VOLUMES_GRANDES",
 	"carga_pequena" => "CARGA_PEQUENA",
 	"carga_media" => "CARGA_MEDIA",
 	"carga_grande" => "CARGA_GRANDE",
 	"ida" => "IDA",
 	"acomodacao_escolhida" => "ACOMODACAO_ESCOLHIDA",
 	"motivo_viagem" => "MOTIVO_VIAGEM",
 	"motivo_viagem_outros" => "MOTIVO_VIAGEM_OUTROS",
 	"viagem_grupo" => "VIAGEM_GRUPO",
 	"viagem_grupo_qual" => "VIAGEM_GRUPO_QUAL",
 	"viagem_grupo_qual_outros" => "VIAGEM_GRUPO_QUAL_OUTROS",
 	"numero_pessoas" => "NUMERO_PESSOAS",
 	"avaliacao_preco" => "AVALIACAO_PRECO",
 	"duracao_viagem" => "DURACAO_VIAGEM",
 	"qualidade_alimentacao" => "QUALIDADE_ALIMENTACAO",
 	"nivel_conforto" => "NIVEL_CONFORTO",
 	"higiene" => "HIGIENE",
 	"seguranca" => "SEGURANCA",
 	"instrucao_seguranca" => "INSTRUCAO_SEGURANCA",
 	"problemas_embarcação" => "PROBLEMAS_EMBARCACAO",
 	"problemas_terminais" => "PROBLEMAS_TERMINAIS",
 	"problemas_viagem" => "PROBLEMAS_VIAGEM",
 	"origem_passageiro" => "ORIGEM_PASSAGEIRO",
 	"destino_passageiro" => "DESTINO_PASSAGEIRO",
 	"tempo_permanencia" => "TEMPO_PERMANENCIA",
 	"embarcado" => "EMBARCADO",	
 	);

$consulta = "SELECT * FROM dbo_view_f6_base"; // Recebe todas as tabelas do banco de dados
$con0 = $mysqli->query($consulta) or die ($mysqli->error); // Erro de consulta
$con1 = $mysqli->query($consulta) or die ($mysqli->error);
$con2 = $mysqli->query($consulta) or die ($mysqli->error);

$_POST['coluna1']  = isset($_POST['coluna1']) ? $_POST['coluna1']  : null; /* Verifica se uma coluna tem uma seleção ou não */
$_POST['coluna2']  = isset($_POST['coluna2']) ? $_POST['coluna2']  : null;
$_POST['coluna3']  = isset($_POST['coluna3']) ? $_POST['coluna3']  : null;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Banco de dados amazonense</title>
	<style type="text/css">
		@media print{
			body .sidebar{
			    font-family: 'Arial';
				display: flex;
				justify-content: center;
			}
			body {
		        margin: auto;
		        font-family: 'Arial';
		        background-color: #f3f9f9;
		    }
			#navicon {
		        visibility: hidden;
		    }
			nav {
		        display: flex;
		        padding: 30px;
		        text-align: center;
		        flex-direction: column;
		        align-items: center;
				flex-direction: row;
				justify-content: space-around;
			}
			nav ul {
		        display: flex;
		        flex-direction: column;
		        align-items: center;
				flex-direction: row;
				width: 80%;
			}
			nav ul li {
		        width: 100%;
		        padding: 2%;    
		        list-style-type: none; 
		    }

			.table-sortable {
		    	width: 80%;
		    	align-items: center;
		    	align-content: center;
		    	margin-top: 50px;
		    	margin-left: 10%;
			    text-align: center;
			    border-collapse:collapse;
			}
			 
			.table-sortable  tbody tr{
			    border-bottom: solid 1px;
			    border-color: #D3D3D3;
			    height:50px;
			}
			.table-sortable  thead{
			    background:#D3D3D3;
			    border: solid 1px;
			    border-color: #D3D3D3;
			}

			.table-sortable  thead tr{
			    height: 50px;
			}
			.table-sortable  input{
			    color:navy;
			    width:100%;
			}
			.pausa {
		      	border-top: 50px solid gray;  
		      	margin: 0;
		      	width: 100%; 
		    }
		    .table-sortable th {
			  cursor: pointer;
			}
			.table-sortable .th-sort-asc::after {
			  content: "\25b4";
			}

			.table-sortable .th-sort-desc::after {
			  content: "\25be";
			}

			.table-sortable .th-sort-asc::after,
			.table-sortable .th-sort-desc::after {
			  margin-left: 5px;
			}

			.table-sortable .th-sort-asc,
			.table-sortable .th-sort-desc {
			  background: rgba(0, 0, 0, 0.1);
			}
		}
	</style>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="img/waves.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script type="text/javascript" src="src/jQuery.js"></script> 
	<link rel="stylesheet" href="css/temp.css">
	<script type="text/javascript" src="src/tablesort.js"></script>  
	<script type="text/javascript" src="src/script.js"></script>  
</head>
<body>
	<input type="checkbox" id="navicon">
	<div class="nav-toggle">
	  	<label for="navicon" class="hamburger">
	    	<span></span>
	    	<span></span>
	    	<span></span>
	 	</label>
	</div>
	<nav class="sidebar" role="complementary">
		<a href="index.php">
			<img id="image" src="img/water.png" width="120" height="60">
		</a>
		<ul id="print">
			<li id="pi"><b><a href="index.php">Página Inicial</a></b></li>
			<li id="cd"><b><a href="https://codepen.io/nhapos/pen/xxqOQGx">Código Fonte</a></b></li>
			<li id="planilhaGerada"><b><a href="planilhaGerada.php">Download em .xls</a></b></li>
			<li id="pdfGerado"><b><a href="pdfGerado.php">Download em .pdf</a></b></li>
		</ul>
	</nav>
	<div class="pausa"></div>
	<?php foreach ($arr as $key => $value){ ?>
		<?php if ($_POST['coluna1'] == $key) { ?>
			<?php if (in_array($key, $os)) { 
				$title1 = array_search($key, $os); 
				$value1 = $value;
				$counter1 = "0"; ?>
			<?php } ?>
		<?php } ?>
		<?php if ($_POST['coluna2'] == $key) { ?>
			<?php if (in_array($key, $os)) { 
				$title2 = array_search($key, $os); 
				$value2 = $value;
				$counter2 = "0"; ?>
			<?php } ?>
		<?php } ?>
		<?php if ($_POST['coluna3'] == $key) { ?>
			<?php if (in_array($key, $os)) { 
				$title3 = array_search($key, $os); 
				$value3 = $value;
				$counter3 = "0"; ?>
			<?php } ?>
		<?php } ?>
	<?php } ?>
	<table id="tabela" class="table-sortable">
		<thead>
			<?php $_SESSION["counterUm"] = $counter1; ?>
			<?php $_SESSION["counterDois"] = $counter2; ?>
			<?php $_SESSION["counterTres"] = $counter3; ?>
			<?php $_SESSION["titulo1"] = array(); ?>
			<?php $_SESSION["titulo2"] = array(); ?>
			<?php $_SESSION["titulo3"] = array(); ?>
			<tr>
				<?php if ($counter1 == "0") { ?>
					<?php $_SESSION["titulo1"][] = $title1; ?>
					<th><?php echo $title1 ?></th>
				<?php } ?>
				<?php if ($counter2 == "0") { ?>
					<?php $_SESSION["titulo2"][] = $title2; ?>
					<th><?php echo $title2 ?></th>
				<?php } ?>
				<?php if ($counter3 == "0") { ?>
					<?php $_SESSION["titulo3"][] = $title3; ?>
					<th><?php echo $title3 ?></th>
				<?php } ?>
			</tr>  
		</thead>
		<tbody>
			<?php $_SESSION["dados1"] = array(); ?>
			<?php $_SESSION["dados2"] = array(); ?>
			<?php $_SESSION["dados3"] = array(); ?>
			<?php while(($dado1 = $con0->fetch_array()) && ($dado2 = $con1->fetch_array()) && ($dado3 = $con2->fetch_array())) { ?>
				<tr>
					<?php if ($counter1 == "0") { ?>
						<?php $_SESSION["dados1"][] = $dado1[$value1]; ?>
						<td id="dado1"><?php echo $dado1[$value1]; ?></td>
					<?php } ?>
					<?php if ($counter2 == "0") { ?>
						<?php $_SESSION["dados2"][] = $dado2[$value2]; ?>
						<td id="dado2"><?php echo $dado2[$value2]; ?></td>
					<?php } ?>
					<?php if ($counter3 == "0") { ?>
						<?php $_SESSION["dados3"][] = $dado3[$value3]; ?>
						<td id="dado3"><?php echo $dado3[$value3]; ?></td>
					<?php } ?>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<script type="text/javascript" src="src/sort.js"></script>  
	<script>
		$(document).ready( function () {
		    $('#tabela').DataTable({
		    	"language": {
		    		"sProcessing":   "A processar...",
					"sLengthMenu":   "Mostrar _MENU_ registos",
					"sZeroRecords":  "Não foram encontrados resultados",
					"sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registos",
					"sInfoEmpty":    "Mostrando de 0 até 0 de 0 registos",
					"sInfoFiltered": "(filtrado de _MAX_ registos no total)",
					"sInfoPostFix":  "",
					"sSearch":       "Procurar:",
					"sUrl":          "",
					"oPaginate": {
					    "sFirst":    "Primeiro",
					    "sPrevious": "Anterior",
					    "sNext":     "Seguinte",
					    "sLast":     "Último"
					}
		    	}
		    });
		} );
	</script>
</body>
</html>