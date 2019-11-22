<html>
<head>
<meta charset="utf-8">
<title>Exercício 17</title>
</head>
<body>
<?php

echo("Exercício 17 - Laço de repetição para verificar quantos números são pares no intervalo de 1 a 100. - 12/09/2019 </br> ");




$num2 = 0;

for ($num1=1; $num1 <= 100 ; $num1++) { 
    if($num1 % 2 == 0){
        $num2++;
        
    }    
}

echo("</br> Quantidade de números pares no intervalo de 1 a 100: " .$num2. " Números.");














?>

</body>
</html>