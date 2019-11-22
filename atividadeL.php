<html>
<head>
<meta charset="utf-8">
<title>Exercício L</title>
</head>
<body>
<?php

echo("<center> Exercício L - Validação de variáveis. - 25/09/2019 </br> </center> ");

$num1 = 40;
$num2 = 14;
$cont1 = $num1;
$cont2 = $num2;

while ($num1 <= 50) {
   
        $cont1++;
        $cont2--;

        echo("A valor 1 é igual " . $num1 . " - Valor 1 com incremento " . $cont1 . "</br>");
        echo("A valor 2 é igual " . $num2 . " - Valor 2 com incremento " . $cont2 . "</br> </br> ");
    


        if($cont1 >= 50){
            break;
        }
}


?>

</body>

</html>