<html>
<html lang = "pt-br">
<head>
<meta charset="UTF-8">
<title>SWITCH</title>
</head>
<h1>Alunos</h1>
<body>

<?php
$grupo = array("Lambarildo", "Marina", "Galeão", "Paulo Paulada");

$i=0;
while($i < count($grupo)){
	$aluno = $grupo[$i];
	echo $aluno.'<br>';
	$i++;
}

?>

</body>
</html>