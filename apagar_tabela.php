<?php

require("conexao.php");

mysqli_select_db($conexao, "sis_academico");

$apagar = "DROP TABLE matricula";

if(mysqli_query($conexao, $apagar)){
	echo "Tabela apagada com sucesso.";
}else{
	echo "Erro ao tentar apagar a tabela: ".mysqli_error();
}

?>
