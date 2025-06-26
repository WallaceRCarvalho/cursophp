<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cursophp-estrutura switch</title>
    </head>
    <body>
        <h1>Estrutura Switch</h1>
        
    <?php
    $dia = 6;
    
    switch ($dia) {
        case 1:
            echo "Domingo";
            break;
        case 2:
            echo "Segunda Feira";
            break;
        case 3:
            echo "Terca Feira";
            break;
        case 4:
            echo "Quarta Feira";
            break;
        case 5:
            echo "Quinta Feira";
            break;
        case 6:
            echo "Sexta Feira";
            break;
        case 7:
            echo "Sabado";
            break;

        default:
            break;
    }
    ?>
</body>
</html>


