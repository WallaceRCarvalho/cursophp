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
            echo "Domingo<br>";
            break;
        case 2:
            echo "Segunda Feira<br>";
            break;
        case 3:
            echo "Terca Feira<br>";
            break;
        case 4:
            echo "Quarta Feira<br>";
            break;
        case 5:
            echo "Quinta Feira<br>";
            break;
        case 6:
            echo "Sexta Feira<br>";
            break;
        case 7:
            echo "Sabado<br>";
            break;

        default:
            break;
    }
    $cor = "Vermelho";
    
    switch ($cor) {
        case "Vermelho":
            echo "Cor Vermelho<br>";
            break;
        case "azul":
            echo "Cor Azul<br>";
            break;
        case "Verde":
            echo "Cor Verde<br>";
            break;
        
        default:
            echo "Cor nao reconhecida<br>";
    }
    ?>
</body>
</html>


