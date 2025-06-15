<?php
$conexao = mysqli_connect("localhost","root","1234");
if(!$conexao){
	die('Não foi possível conectar ao bando de dados. Erro dectado: '.mysqli_error());
}
echo 'Conexão bem sucedida.';

$conexao->set_charset('utf8');

mysqli_close($conexao);
?>

