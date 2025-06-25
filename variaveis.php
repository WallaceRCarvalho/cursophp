<?php
    echo "Ola, Mundo!<br><br>";

    $nome = "Wallace Reis";
    $idade = 50;

    echo "Nome " . $nome . " tem a idade " . $idade . "<br><br>";

    $qnt_prod = 61;
    $qnt_prod = $qnt_prod - 7;
    echo "Quantidade de produto no estoque: $qnt_prod <br><br>";

    $saldo = 5.87;
    $deposito = 2.85;

    $saldo = $saldo + $deposito;
    echo "Saldo: $saldo <br><br>";

    $saldo = 258.25;
    $deposito = 1300.40;

    $saldo = $saldo + $deposito;
    echo "Saldo: " . number_format($saldo, 2,",",".")." <br><br>";
    
    $situacao = false;
    if($situacao) {
        echo "<span style='color: green;'>Aprovado</span><br><br>";
    }else{
        echo "<span style='color: red;'>Reprovado</span><br><br>";
    }

?>
