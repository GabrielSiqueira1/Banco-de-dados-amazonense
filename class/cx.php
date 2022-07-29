<?php

$host = "localhost";
$usuario = "id16830733_gabrielsiqueira";
$senha = "Mqdpamnc0210/";
$bd = "id16830733_dbo_view_f6_base";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if($mysqli->connect_errno)
	echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;

?>