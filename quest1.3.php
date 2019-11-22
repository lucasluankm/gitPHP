<html>
<head>
<meta charset="utf-8">
<title>Exercício 3</title>
</head>
<body>
<?php


echo ("Exercício 3 - Subtração das Variáveis  </br>");

$num1 = -14;
$result = "";



if($num1 > 0){
    $result = "Valor Positivo";
}

else if($num1 < 0){
    $result = "Valor Negativo";
}

else{
    $result = "Igual a Zero";
}

echo ("Valor da Variável: " . $num1 . " </br> ");
echo ($result);

?>

</body>
</html>
