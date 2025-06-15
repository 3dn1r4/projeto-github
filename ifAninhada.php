<html>
<html lang = "pt-br">
<head>
<meta charset="UTF-8">
<title>If Aninhada</title>

</head>
<body>
<h1>If Aninhada</h1>

<?php

$prova1 = 10;
$prova2 = 10;
$media = ($prova1 + $prova2) / 2;
if($media >=7.0){
	echo 'Aluno aprovado com nota: '. $media.'.'.'<br>';
	
	if($media == 10){
	echo 'Parábens pelo excelente resultado!';
}
}
elseif($media < 7.0 && $media >= 0.1){
	echo 'Aluno em recuperação com nota: '. $media.'<br>';
}

elseif($media == 0){
	echo 'Aluno reprovado com a nota: '. $media.'<br>';
}

?>

</body>
</html>