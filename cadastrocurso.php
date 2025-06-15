<?php
$nome = $_POST['aluno'];
$curso = $_POST['curso'];


require("conexao.php");

mysqli_select_db($conexao, "sis_academico");

$inserir = "INSERT INTO matricula 
			(id, nome, curso)
			VALUES('','$nome','$curso')";
mysqli_query($conexao, $inserir);
?>
