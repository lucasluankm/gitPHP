<html>
<head>
<meta charset="utf-8">
<title>Exercício 2</title>
</head>
<body>
<?php


echo ("Exercício 2 - Soma das Variáveis/Condição para somar </br>");

$num1 = 9;
$num2 = 5;

$result = $num1 + $num2;

echo ("A: " . $num1 . "</br> ");
echo("B: " . $num2 . "</br> ");

echo ("A soma das variaveis: " . $num1 . " + " . $num2 . " será: " . $result . " </br> ");


if($result >= 20){
    $result + 8;

    echo ("Resultado caso o resultado seja maior ou igual a 20. </br> ");
}

else if ($result <= 20){
    $result - 5;

    echo ("Resultado caso o resultado seja menor ou igual a 20. </br> ");

  
}

?>

</body>
</html>
