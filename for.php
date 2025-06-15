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

for($i = 0; $i < count($grupo); $i++)
{
	$aluno = $grupo[$i];
	echo $aluno.'<br>';
}

?>

</body>
</html>