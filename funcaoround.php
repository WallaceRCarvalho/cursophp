<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cursophp-Funcao Round</title>
    </head>
    <body>
        <h1>Funcao Round</h1>
<?php

$numero = 230.1480;
echo round($numero, 2)."<br>";
echo round($numero, 1)."<br>";
echo round($numero, 0)."<br>";
echo round($numero, -1)."<br>";
echo round($numero, -2)."<br>";
echo round($numero, 2, PHP_ROUND_HALF_DOWN)."<br>";
echo round($numero, 1, PHP_ROUND_HALF_UP)."<br>";
?>