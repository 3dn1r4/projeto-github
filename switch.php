<html>
<html lang = "pt-br">
<head>
<meta charset="UTF-8">
<title>SWITCH</title>
</head>
<h1>Curso e Turnos</h1>
<body>

<?php
$mod = isset($_POST['curso']);//isset testa se uma condição é falsa.

switch($mod){
	case 'm':
	echo 'Manutenção de Computadores: manhã e noite.';
	break;
	
	case 'r':
	echo 'Rede de Computadores: tarde.';
	break;
	
	case 'p':
	echo 'Programação de Computadores: tarde e noite.';
	break;
	
	case 'w':
	echo 'Programação Web: manhã e tarde.';
	break;
	
	default:
	echo 'Preencha o formulário novamente.';
	break;
}

?>

</body>
</html>