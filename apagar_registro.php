<?php

require("conexao.php");

mysqli_select_db($conexao, "sis_academico");

$apagar = "DELETE FROM matricula
WHERE nome = 'Marina da Glória'";

mysqli_query($conexao, $apagar);
mysqli_close($conexao);

?>
