<html>
<head>
<meta charset="utf-8">
<title>Exercício 11</title>
</head>
<body>
<?php


echo("Exercício 11 - Variáveis maiores e menores. </br>");

$num1 = 10;
$num2 = 20;

while($num1 < $num2){

if($num1 < $num2){
	$num1++;
	$num2--;
	
	echo("</br>");
		
echo("A variável 1 é igual a " . $num1 . "</br>");
echo("A variável 2 é igual a " . $num2 . "</br>");
}

}

if($num1 = $num2){
	
$num1++;
$num2--;
	
echo("</br> A variável 1 é igual a " . $num1 . "</br>");
echo("A variável 2 é igual a " . $num2 . "</br>");

}


?>

</body>
</html>