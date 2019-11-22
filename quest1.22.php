<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 22</title>
</head>
<body>

<?php


echo("<center> Exercício 22 - Números Primos. - 18/09/2019 </center> </br>");


for($i = 1; $i <= 200; $i++)
{
    $cont = 0;
     
    for($j = $i; $j >= 1; $j--)
    {
    if (($i % $j) == 0) {
            $cont++;
        }
    }
     
    if ($cont == 2)
    {
        echo $i;
		echo"<br>";
    }
}

?>

</body>
</html>