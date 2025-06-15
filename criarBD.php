<?php
$conexao = mysqli_connect("localhost","root","1234");
if(!$conexao){
	die('Não foi possível conectar ao bando de dados. Erro dectado: '.mysqli_error());
}
echo 'Conexão bem sucedida.'.'<br/>';

$banco = "CREATE DATABASE sis_academico";

if(mysqli_query($conexao, $banco)){
	echo "O banco de dados foi criado com sucesso.\n";
}else{
	echo 'Erro ao criar banco de dados: '.mysqli_error;
}

mysqli_close($conexao);
?>

