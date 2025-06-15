<?php

require("conexao.php");

mysqli_select_db($conexao, "sis_academico");

$consulta = "SELECT * FROM matricula";

$matricula = mysqli_query($conexao, $consulta);

while($array = mysqli_fetch_array($matricula)){
	echo $array['id'] . " - ".
	" Aluno: " . $array['nome']. " - " . 
	" Curso: " . $array['curso']. "<br/>";
}
?>
