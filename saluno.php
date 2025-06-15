<html>
<html lang = "pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html;
charset=utf-8" />
<title>sitaçãoAluno</title>
</head>
<h1>Situação Aluno</h1>
<body>

<?php

$aluno = $_POST['nome'];
$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$f = $_POST['falta'];

function calcularMedia($prova1, $prova2){
		return ($prova1 + $prova2) / 2;
}
$resultado = calcularMedia($p1, $p2);

if($resultado <7.0 && $resultado >= 0.1 && $f <= 32){ 
	echo 'Aluno em recuperação com nota: '. $resultado;
}

elseif($resultado == 0 || $f > 32){
	echo 'Aluno reprovado.';
}

else{
	echo 'Preencha novamente o formulário.';
}

?>
</body>
</html>