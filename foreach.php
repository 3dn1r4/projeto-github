<html>
<html lang = "pt-br">
<head>
<meta charset="UTF-8">
<title>SWITCH</title>
</head>
<h1>Disciplinas</h1>
<body>

<?php
$disciplinas = array("Redes de Coputadores", "Algorítimos", "Programação de Computadores",
"Manutenção de Computadores");

foreach($disciplinas as $value)
{
	echo $value.'<br>';
}

?>

</body>
</html>