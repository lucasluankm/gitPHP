<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 25</title>
</head>
<body>

<?php


echo("<center> Exercício 25 - Tabuada de Divisão. - 18/09/2019 </center> </br>");

$num1 = 0;
$num2 = 1;
        
         
    
            while ($num1 <= 20) {
                
                $num1++;
                $num2++;
         
                $result = $num1 / $num2;
                $result4 = $result * 5;
                
    
                echo($num1 . " / " . $num2 . " = " . $result . "</br>");
                
                
            }

?>

</body>
</html>