<html>
<html lang = "pt-br">
<head>
<meta charset="UTF-8">
<title>Estrutura ElseIF</title>

</head>
<body>

<?php

$prova1 = 0;
$prova2 = 0;
$media = ($prova1 + $prova2) / 2;
if($media >=7.0){
	echo 'Aluno aprovado com nota: '. $media.'<br>';
}
elseif($media < 7.0 && $media >=0.1){
	echo 'Aluno em recuperação com nota: '. $media.'<br>';
}
elseif($media == 0){
	echo 'Aluno reprovado com nota: '. $media.'<br>';
}

?>

</body>
</html>