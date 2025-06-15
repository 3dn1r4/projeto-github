<html>
<html lang = "pt-br">
<head>
<meta http-equiv=”Content-Type” content=”text/html;
charset=utf-8” />
<title>imprimirMedia</title>
</head>
<h1>Imprimir Média</h1>
<body>

<?php
function imprimirmedia($prova1, $prova2)
{
	$media = ($prova1 + $prova2) / 2;
	echo "Média: ".$media.'<br>';
}

imprimirmedia(7.0, 8.0);


?>

</body>
</html>