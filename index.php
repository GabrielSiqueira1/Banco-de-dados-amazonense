<?php

function combobox($arrDados, $valorSelecionado = null) { /* Caso esteja sem nenhuma opção selecionada, aparece a string abaixo */
    echo "<option>Selecione uma tabela</option>";
    foreach ($arrDados as $key => $value) { /* Cada item do arrCombo será identificado com uma chave e o objetivo é obter o seu valor, o mesmo vale ($arrDados as $value) */
        $selected = ($valorSelecionado == $key) ? "selected=\"selected\"" : null;  /* Quando o valor selecionado é igual a uma chave do vetor, $selected assume esse valor */
        echo "<option value=\"$key\" $selected >$value</option>";
    }
}

/* Array que contêm as opções para a caixa de seleção. No lado esquerdo está o nome da variável que irá
receber a informação e do lado direito está a String que será exibida na caixa de seleção. */
$arrCombo = array(
    "origem_geral" => "Origem geral",
    "num_pesquisa"  => "Número da pesquisa",
    "ID" => "ID",
    "formulario" => "Formulário",
    "pesquisador" => "Pesquisador",
    "supervisor" => "Supervisor",
    "codificador" => "Codificador",
    "embarcacao" => "Embarcação",
    "armador" => "Armador",
    "data" => "Data",
    "hora_inicio" => "Horário Inicial",
    "hora_fim" => "Horário Final",
    "origem" => "Origem",
    "destino" => "Destino",
    "idade" => "Idade",
    "residencia" => "Residência",
    "outra_residencia" => "Outra residência",
    "genero" => "Gênero",
    "grau_instrucao" => "Grau de instrução",
    "tipo_imovel" => "Tipo de imóvel",
    "outro_tipo_imovel" => "Outro tipo de imóvel",
    "geladeira" => "Tem geladeira?",
    "habito_dormir" => "Onde dorme?",
    "outro_habito_dormir" => "Dorme em outro lugar?",
    "preco_passagem" => "Preço da passagem",
    "renda_familiar" => "Renda Familiar",
    "forma_adq_passagem" => "Forma de adquirir a passagem",
    "outra_forma_adq_passagem" => "Outra forma de adquirir a passagem",
    "quanto_doacao" => "Valor da doação",
    "viagem_de_novo" => "Viaja novamente?",
    "conhece_outros_barcos" => "Conhece outros barcos",
    "conhece_outros_barcos_quais" => "Quais outros barcos você conhece",
    "local_compra_passagem" => "Local de compra de passagem",
    "local_compra_passagem_qual" => "Qual local de compra de passagens",
    "tempo_embarcado" => "Tempo embarcado",
    "frequencia_viagem" => "Frequência de viagem",
    "usa_aviao" => "Relação dos usuários que usam avião",
    "compra_antecedencia" => "Relação de compras com antecendência",
    "compra_antecedencia_qual" => "Compra com quanto de antecedência",
    "relacao_epoca_ano" => "Relação com épocas do ano",
    "relacao_epoca_ano_qual" => "Relação de quais épocas do ano",
    "relacao_epoca_mes" => "Relação com épocas dos meses",
    "relacao_epoca_mes_qual" => "Relação de quais épocas do mes",
    "volumes_peq" => "Volumes pequenos",
    "volumes_medios" => "Volumes médios",
    "volumes_grandes" => "Volumes grandes",
 	"carga_pequena" => "Carga pequena",
 	"carga_media" => "Carga média",
 	"carga_grande" => "Carga grande",
 	"ida" => "Ida",
 	"acomodacao_escolhida" => "Acomodação escolhida",
 	"motivo_viagem" => "Motivo da viagem",
 	"motivo_viagem_outros" => "Outros motivos para viagem",
 	"viagem_grupo" => "Viagem em grupo",
 	"viagem_grupo_qual" => "Relação do grupo com o usuário",
 	"viagem_grupo_qual_outros" => "Outras relações do grupo com o usuário",
 	"numero_pessoas" => "Número de pessoas",
 	"avaliacao_preco" => "Avaliação dos preços",
 	"duracao_viagem" => "Avaliação da duração das viagens",
 	"qualidade_alimentacao" => "Avaliação da qualidade da alimentação",
 	"nivel_conforto" => "Nível de conforto",
 	"higiene" => "Avaialiação da higiene",
 	"seguranca" => "Avaialiação da segurança",
 	"instrucao_seguranca" => "Instrução de segurança",
 	"problemas_embarcação" => "Problemas para embarcar",
 	"problemas_terminais" => "Problemas nos terminais",
 	"problemas_viagem" => "Problemas na viagem",
 	"origem_passageiro" => "Origem do passageiro",
 	"destino_passageiro" => "Destino do passageiro",
 	"tempo_permanencia" => "Tempo de permanência",
 	"embarcado" => "Embarcado",
 	);

?>

<!DOCTYPE html>
<html>
<!-- Estilização da página -->
<head>
	<title>Banco de dados amazonense</title>
	<style type="text/css">
		@media print{
			nav {
		        display: flex;
		        flex-direction: column;
		        align-items: center;
		        padding: 30px;
				flex-direction: row;
				justify-content: space-around;
			}
			nav ul {
		        display: flex;
		        flex-direction: column;
		        align-items: center;
				flex-direction: row;
				width: 70%;
			}
		    body {
		        margin: auto;
		        font-family: 'Arial';
		        background-color: #f3f9f9;
		    }

		    #navicon {
		        visibility: hidden;
		    }

		    p {
		        margin: 0px 100px;
		        text-align: justify;
		        line-height: 25px;
		    }

		    
		    .prim_secc {
		        margin: 50px 100px;
		        font-size: 1.6rem;
		        box-sizing: 10px;
		        background-color: black;
		        color: white;
		        padding: 15px;
		        width: 130px;
		    }

		    .prim_secc a:link{
		        text-decoration: none;
		    }

		    .prim_secc a:visited{
		        text-decoration: none;
		        color: white;
		    }

		    .prim_secc a:active{
		        text-decoration: none;
		    }

		    .prim_secc a:hover{
		        text-decoration: underline; 
		        color: white;
		    }

		    .seg_secc {
		        margin: 50px 100px;
		        font-size: 1.6rem;
		        box-sizing: 10px;
		        background-color: black;
		        color: white;
		        padding: 15px;
		        width: 240px;
		    }

		    .seg_secc a:link{
		        text-decoration: none;
		    }

		    .seg_secc a:visited{
		        text-decoration: none;
		        color: white;
		    }

		    .seg_secc a:active{
		        text-decoration: none;
		    }

		    .seg_secc a:hover{
		        text-decoration: underline; 
		        color: white;
		    }

		    .terc_secc {
		        margin: 50px 100px;
		        font-size: 1.6rem;
		        box-sizing: 10px;
		        background-color: black;
		        color: white;
		        padding: 15px;
		        width: 470px;
		    }

		    .terc_secc a:link{
		        text-decoration: none;
		    }

		    .terc_secc a:visited{
		        text-decoration: none;
		        color: white;
		    }

		    .terc_secc a:active{
		        text-decoration: none;
		    }

		    .terc_secc a:hover{
		        text-decoration: underline; 
		        color: white;
		    }

		    nav ul li {
		        width: 100%;
		        padding: 2%;    
		        list-style-type: none; 
		    }

		    #periodicos a:link{
		        text-decoration: none;
		    }

		    #periodicos a:visited{
		        text-decoration: none;
		        color: black;
		    }

		    #periodicos a:active{
		        text-decoration: none;
		    }

		    .pausa {
		      border-top: 50px solid gray;  
		      margin: 0;
		      width: 100%; 
		    }

		    .select-box1 {
		        width: 250px;
		        height: 50px; 
		        color: gray;
		        border-radius: 10px;
		        margin-bottom: 20px;
		        margin: 40px;
		    }

		    .select-box2 {
		        width: 250px;
		        height: 50px; 
		        color: gray;
		        border-radius: 10px;
		        margin-bottom: 20px;
		        margin: 40px;
		    }

		    .select-box3 {
		        width: 250px;
		        height: 50px; 
		        color: gray;
		        border-radius: 10px;
		        margin-bottom: 20px;
		        margin: 40px;
		    }

		    .filtro {
		        width: 150px;
		        height: 50px;   
		        margin-top: 20px;
		        border-radius: 10px;
		        margin-bottom: 20px;
		    }

		    form {
		        text-align: center;
		    }
		}
	</style>
	<meta charset="utf-8">
	
	<link rel="shortcut icon" href="img/waves.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<input type="checkbox" id="navicon">
	<div class="nav-toggle">
		<!-- Menu de Hamburger, para telas menores -->
	  	<label for="navicon" class="hamburger">
	    	<span></span>
	    	<span></span>
	    	<span></span>
	 	</label>
	</div>
	<!-- Menu padrão -->
	<nav class="sidebar" role="complementary">
		<a href="index.php">
			<img id="image" src="img/water.png" width="120" height="60">
		</a>
		<ul id="options">
			<li id="cd"><b><a href="index.php">Página Inicial</a></b></li>
			<li id="periodicos"><b><a href="https://periodicos.ufv.br/jcec">Periódicos</a></b></li>
			<li id="zip_conteudo"><b><a href="https://www.ufv.br/">UFV</a></b></li>
		</ul>
	</nav>
	<div class="pausa"></div>
	<p class="prim_secc"><a href="index.php">Visão geral</a></p>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce molestie nulla vel urna aliquam vulputate. Nam ut tempus mi. Ut consectetur tellus quis bibendum dictum. Curabitur facilisis sodales metus vitae ornare. Quisque molestie pharetra metus non congue. Quisque nec massa a est maximus molestie at sit amet libero. Morbi ac aliquet tortor. Integer lacinia porta erat vitae mattis. Nulla commodo feugiat metus, nec lacinia mauris. Sed nec ipsum ornare, vehicula erat quis, bibendum magna. Proin tortor sem, porttitor in eros ut, tincidunt condimentum lorem. Integer pretium lectus id sem efficitur, id porttitor leo viverra. Sed tellus dui, pretium id arcu sit amet, blandit luctus purus. Phasellus malesuada mi eget elit venenatis tempor. Aenean ex orci, maximus sit amet iaculis sit amet, tempus eget quam. Proin at ornare ante. Phasellus rhoncus egestas lorem, in volutpat turpis elementum eu. Pellentesque vitae lectus tristique, mollis nunc id, consequat erat. Donec sed magna metus. Vestibulum purus odio, tincidunt sit amet convallis et, congue vitae sapien. Maecenas dui dolor, scelerisque nec enim eget, mollis luctus erat. Donec molestie non nisl at posuere. Pellentesque blandit, elit sed consequat imperdiet, tortor massa accumsan purus, eu fermentum nunc lacus quis erat. Donec semper nisl vel nulla ultrices, ac condimentum orci ultricies.</p>
	<p class="seg_secc"><a href="index.php">Propriedades do site</a></p>
	<p>Integer nulla arcu, bibendum nec nisi nec, lacinia pharetra leo. In imperdiet lobortis urna, non semper urna gravida at. Nulla consequat mi ante, sed rutrum mi viverra sit amet. Nullam id lacus placerat, gravida elit eu, malesuada nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent sollicitudin, nunc nec vehicula aliquam, massa nibh porta est, a consequat felis ligula a mauris. Nunc ut commodo turpis. Aliquam rutrum viverra tortor, quis condimentum nibh vulputate luctus. Curabitur pulvinar tellus ac risus accumsan laoreet.</p>
	<p>Phasellus condimentum risus non lorem egestas ullamcorper. Suspendisse luctus ultricies lectus. Vivamus eu enim pulvinar, efficitur enim sit amet, commodo metus. Curabitur ante magna, porta sed nibh sed, dictum venenatis ligula. Mauris lacinia massa et interdum dignissim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam dui ante, interdum vitae libero ac, facilisis hendrerit sem.</p>
	<p>Donec lacus neque, molestie ullamcorper arcu sit amet, gravida vulputate risus. Etiam at ultrices libero. Pellentesque vehicula neque sit amet lorem rutrum, in aliquet massa luctus. Duis et posuere sapien. Donec sit amet purus auctor, viverra orci eget, sollicitudin urna. In pulvinar posuere dolor, ut maximus risus congue in. Etiam vitae tortor purus. Vestibulum suscipit magna nisl, a fermentum metus laoreet eget. Fusce ornare diam ut augue auctor dictum. Vestibulum lobortis vel sem vitae auctor. Nunc vitae lorem aliquet, pellentesque purus ac, facilisis odio. Nunc fermentum nibh nec libero convallis, ut pretium mi condimentum. Curabitur at pellentesque massa. Nunc eu est dapibus, interdum justo vel, fringilla eros. Aenean arcu ex, tempor quis nunc vel, mattis ultrices odio. Pellentesque vehicula sapien eget ante pharetra, auctor lobortis massa vehicula.</p>
	<p class="terc_secc"><a href="index.php">Escolha as tabelas que serão impressas:</a></p>
	<div>
		<form method="post" id="userform" action="thisform.php"> <!-- Redirecionamento para outra página -->
			<div class="divisoes">
				<div>
					<select name="coluna1" class="select-box1">
	                    <?php combobox($arrCombo, $valor_selecionado); ?> <!-- A partir do array do inicio, se obtem o valor selecionado que será utilizado na função da primeira linha --> 
					</select>
				</div>
				<div>
					<select name="coluna2" class="select-box2">
	                    <?php combobox($arrCombo, $valor_selecionado); ?> 
					</select>
				</div>
				<div>
					<select name="coluna3" class="select-box3">
	                    <?php combobox($arrCombo, $valor_selecionado); ?> 
					</select>
				</div>
			</div>
			<input class="filtro" type="submit" value="Filtrar" />
		</form>
	</div>
</body>
</html>