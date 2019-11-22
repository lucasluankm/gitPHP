<html>
<head>
<meta charset="utf-8">
<title>Exercício 10</title>
</head>
<body>
<?php

$choice = "+";

echo("Exercício 10 - Operações. </br>");

$num1 = 10;
$num2 = 5;

$soma = 0;
$subtracao = 0;
$multiplicao = 0;
$divisao = 1;

switch($choice){

case "+":

$soma = $num1 + $num2;
echo($num1 . " + " . $num2 . " = " . $soma . "</br>");
break;

case "-":

$subtracao = $num1 - $num2;

echo($num1 . " - " . $num2 . " = " . $subtracao . "</br>");
break;

case "*":

$multiplicao = $num1 * $num2;

echo($num1 . " * " . $num2 . " = " . $multiplicao . "</br>");
break;


case "/":

$divisao = $num1 / $num2;

echo($num1 . " / " . $num2 . " = " . $divisao . "</br>");
break;




}


?>

</body>

</html>
