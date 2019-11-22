<html>
<head>
<meta charset="utf-8">
<title>Exercício G</title>
</head>
<body>
<?php

echo("<center> Exercício G - Soma das Variáveis. - 25/09/2019 </br> </center> ");


$num1 = 5;
$num2 = 9;
$soma = $num1 + $num2;


echo("Valor da 1ª variável: " . $num1 . "</br>");
echo("Valor da 2ª variável: " . $num2 . "</br>");
echo("Soma da 1ª variável e da 2ª variável: " . $soma . "</br>");
echo($num1 . " + " . $num2 . " = " . $soma . "</br> </br>");

if($soma >= 30){
    $soma1 = $soma + 10;

    echo("Resultado caso a soma de menor ou igual a 30. </br>  Valor: " . $soma1 . "</br>");
}

else if($soma <= 30) {
    $total = $soma - 5;

    echo("Resultado caso a soma de menor ou igual a 30. </br>  Valor: " . $total . "</br>");

}












?>

</body>

</html>