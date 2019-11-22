<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 30</title>
</head>
<body>

<?php

echo("<center> Exercício 30 - Avaliações de Alunos. - 02/10/2019 </center> </br>");

    $num = 1;

    switch ($num) {
        case '1':
            echo("O aluno é Frequente. </br> Nome do Aluno: Lucas Luan.");
            break;
        
        
        case '2':
            echo("O aluno é Ausente. </br> Nome do Aluno: Luana Teruel.");
            break;

        case '3':
            echo("O aluno possui uma Falta Justificada. </br> Nome do Aluno: Kesley Silva.");
            break;

        case '4':
            echo("O aluno foi Evadido. </br> Nome do aluno: Dalton Silva ");
            break;

        case '5':
            echo("O aluno é Desistente.. </br> Nome do aluno: Luiz Malta ");
            break;
            default;
    }

?>

</body>
</html>