<html>
<head>
<meta charset="utf-8">
<title>Exercício I</title>
</head>
<body>
<?php

echo("<center> Exercício I - Verificar se valor está no intervalo de 10 a 100 e se é ímpar ou par. - 25/09/2019 </br> </center> ");


for ($num=14; $num < 15 ; $num++) { 
    
    if($num >= 10 || $num <= 100){
    echo("Valor: " . $num . "</br>");
    echo("O valor está no intervalo de 10 a 100. </br>");

    if($num % 2 == 0){
        echo("O valor é par.");
    }

    else{
        echo("O valor é ímpar.");
    }
}

}



?>

</body>

</html>