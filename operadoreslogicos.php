<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso php</title>
</head>
<body>
    <?php
    $a = 10;
    $b = 8;
    $c = 7;

    if(($a == 10) AND ($b == 8)) {
        echo "Utilizado AND: Verdadeiro <br><br>";
    }else{
        echo "Utilizado AND: False <br><br>";
    }

    if(($a == 1) OR ($b == 7)) {
        echo "Utilizado OR: Verdadeiro <br><br>";
    }else{
        echo "Utilizado OR: False <br><br>";
    }

    if(($a == 9) XOR ($b == 8)) {
        echo "Utilizado XOR: Verdadeiro <br><br>";
    }else{
        echo "Utilizado XOR: False <br><br>";
    }

    if(!empty($c)){
        echo "Utilizado !: Verdadeiro <br><br>";
    }else{
        echo "Utilizado !: False <br><br>";
    }

    if(($a == 1) && ($b == 7)) {
        echo "Utilizado &&: Verdadeiro <br><br>";
    }else{
        echo "Utilizado &&: False <br><br>";
    }

    if(($a == 9) || ($b == 8)) {
        echo "Utilizado ||: Verdadeiro <br><br>";
    }else{
        echo "Utilizado ||: False <br><br>";
    }

    ?>
</body>
</html>