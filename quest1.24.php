<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 24</title>
</head>
<body>

<?php


echo("<center> Exercício 24 - Sinais do Semáforo. - 18/09/2019 </center> </br>");

$num = 3;

switch ($num) {
    case '1':
        echo("Vermelho. O sinal está fechado para os veiculos. Não ultrapasse. ");
        break;
    
    case '2':
        echo("Amarelo. O sinal está prestes a ser fechado. Recomendado não ultrapassar.");
        break;

    case '3':
        echo("Verde. O sinal está aberto para os veiculos. A ultrapassagem está livre.");
        break;
        default;
}




?>

</body>
</html>