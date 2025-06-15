<html>
<html lang = "pt-br">
<head>
<meta charset="UTF-8">
<title>Estrutura IF</title>

</head>
<body>

<?php

$prova1 = 5.5;
$prova2 = 4.0;
$media = ($prova1 + $prova2) / 2;
if($media >=7.0){
	echo 'Aluno aprovado com nota: '. $media;
}
else{
	echo 'Recuperação com a nota: '. $media;
}

?>

</body>
</html>