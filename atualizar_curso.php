<?php

require("conexao.php");

mysqli_select_db($conexao, "sis_academico");

$novo_curso = "Seg. Trabalho";

$atualizar = "UPDATE matricula SET curso = '$novo_curso'
WHERE curso = 'Informática'";

mysqli_query($conexao, $atualizar);
mysqli_close($conexao);

?>
