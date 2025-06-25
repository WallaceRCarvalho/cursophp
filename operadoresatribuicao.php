<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <?php
    $a = 1;
    $b = 2;
    $c = 3;
    $result = 6;

    echo "<h1>Operadores de Atribuição</h1>";

    echo "Somar o valor $result pelo valor $a<br>";
    $result += $a;
    echo "Resultado da Adição: " . $result . "<br><br>";

    echo "Subtrair o valor $result pelo valor $b<br>";
    $result -= $b;
    echo "Resultado da Subtração: " . $result . "<br><br>";

    echo "Multiplicar o valor $result pelo valor $b<br>";
    $result *= $b;
    echo "Resultado da Multiplicação: " . $result . "<br><br>";

    echo "Dividir o valor $result pelo valor $b<br>";
    $result /= $b;
    echo "Resultado da Divisão: " . $result . "<br><br>";

    echo "O Resto do valor $result pelo valor $b<br>";
    $result %= $b;
    echo "Resultado do Modulo: " . $result . "<br><br>";

    $d = "Bom ";
    $d .= "Dia, ";
    $d .= "Wallace.";
    echo $d;

    ?>
</body>
</html>