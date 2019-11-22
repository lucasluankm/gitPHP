<html>
<head>
<meta charset="utf-8">
<title>Exercício C</title>
</head>
<body>
<?php

echo("<center> Exercício C - Dias da Semana. - 25/09/2019 </br> </center> ");


$num = 4;

echo("Dias da Semana.");

echo("1 - Domingo. </br>");
echo("2 - Sábado. </br>");
echo("3 - Sexta. </br>");
echo("4 - Quinta. </br>");
echo("5 - Quarta. </br>");
echo("6 - Terça. </br>");
echo("7 - Segunda. </br> </br>");


switch ($num) {
    case '1':
        echo("Você escolheu a opção 1 - Domingo.");
        break;

    case '2':
        echo("Você escolheu a opção 2 - Sábado.");
        break;

    case '3':
        echo("Você escolheu a opção 3 - Sexta-Feira.");
        break;

    case '4':
        echo("Você escolheu a opção 4 - Quinta-Feira.");
        break;

    case '5':
        echo("Você escolheu a opção 5 - Quarta-Feira.");
        break;

    case '6':
        echo("Você escolheu a opção 6 - Terça-Feira.");

    case '7':
        echo("Você escolheu a opção 7 - Segunda-Feira.");
        break;
        default;

}



?>

</body>

</html>