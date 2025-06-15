<?php
$conexao = mysqli_connect("localhost","root","1234");
if(!$conexao){
	die('Não foi possível conectar ao bando de dados. Erro dectado: '.mysqli_error());
}

$conexao->set_charset('utf8');

echo 'Conexão bem sucedida.'.'<br/>';

mysqli_select_db($conexao, "sis_academico");

	$tabela_matricula = "CREATE TABLE matricula(
id INT(10) AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(50) NOT NULL,
curso VARCHAR(50) NOT NULL)";

if(mysqli_query($conexao, $tabela_matricula)){
	echo "Tabela matrícula criada com sucesso.\n";
}else{
	echo 'Erro ao criar tabela matrícula: '.mysqli_error;
}

mysqli_close($conexao);
?>

