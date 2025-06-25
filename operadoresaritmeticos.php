<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP</title>
</head>
<body>
    <?php
    $a = 2;
    $b = 4;
    $c = 7;

    echo "<h1>Operadores Aritmeticos</h1>";

    $result_soma = $a + $b;
    echo "Soma: " . $result_soma . "<br>";
 
    $result_subtracao = $a - $b;
    echo "Subtração: " . $result_subtracao . "<br>";

    $result_multi = $a * $b;
    echo "Multiplicação: " . $result_multi . "<br>";

    $result_multi = $a * $c;
    echo "Multiplicação: " . $result_multi . "<br>";

    $result_div = $b / $a;
    echo "Divisão: " . $result_div . "<br>";

    $result_div = $c / $a;
    echo "Divisão: " . $result_div . "<br>";

    $result_resto = $c % $a;
    echo "Resto da Divisão: " . $result_resto . "<br>";
    ?>



</body>
</html>