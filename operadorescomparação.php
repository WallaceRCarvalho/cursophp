<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curso php</title>
</head>
<body>
    <?php
    $a = 10;
    $b = 8;

    if($a == $b) {
        echo "Verdadeiro: o numero $a e igual ao valor $b <br><br>";
    }
    else{
        echo "Falso: o numero $a nao e igual ao valor $b <br><br>";    
    }

    if($a != $b) {
        echo "Verdadeiro: o numero $a e diferente ao valor $b <br><br>";
    }
    else{
        echo "Falso: o numero $a e igual ao valor $b <br><br>";    
    }

    if($a < $b){
        echo"Verdadeiro: o numero $a e menor do que o valor $b <br><br>";
    }
    if($a > $b){
        echo"Verdadeiro: o numero $a e maior do que o valor $b <br><br>";
    }
    if($a <= $b){
        echo"Verdadeiro: o numero $a e menor ou igual ao valor $b <br><br>";
    }
    if($a >= $b){
        echo"Verdadeiro: o numero $a e maior ou igual ao valor $b <br><br>";
    }
    
    

    ?>
</body>
</html>