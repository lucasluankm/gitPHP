<html>
<head>
<meta charset="utf-8">
<title>Exercício 19</title>
</head>
<body>
<?php

echo("Exercício 19 - Laço de repetição para verificar quantos números são ímpares no intervalo de 1 a 200. - 12/09/2019 </br> ");



$num2 = 0;

for ($num1=1; $num1 <= 100 ; $num1++) { 
    if ($num1 %  2 == 1) {
        $num2++;
        
    }
}

echo("</br> Números pares no intervalo de 1 a 200: </br>" . $num2);


?>

</body>

</html>