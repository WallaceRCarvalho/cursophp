<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cursophp-constantes</title>
    </head>
    <body>
        <h1>Constantes</h1>
    <?php
    // curso em php inicial
    //estudos de constantes em php
    //define(nome_constante, valor_constante[, igone_caso]

        define("constante1", "Wallace");
        define("constante2", "Wallace", true);
        define("constante3", 52);
        echo constante1 . "<br>";
        echo constante2 . "<br>";
        echo constante3 . "<br>";
        
        define('LINGUAGENS', array('C','JAVA','PYTHON'));
        echo LINGUAGENS[2]; // Saida: "PYTHON"
    ?>
</body>
</html>

