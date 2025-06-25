<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "cursophp";
$port = 3306;


try {
    
    //Conexao com a porta do banco de dados
    $conn = new PDO("mysql:host=$host;port=$port;dbname=".$dbname, $user, $pass);

    //Conexao sem a porta do banco de dados
    //$conn = new PDO("mysql:host=$host;port=$port;dbname=".$dbname, $user, $pass);

    // Configura o PDO para lançar exceções em caso de erro
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Opcional: define charset utf8mb4 para suportar acentos e emojis
    $conn->exec("SET NAMES 'utf8mb4'");
    
    // echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    // Mensagem de erro amigável
    echo "<p style='color: red;'>Erro na conexão com o banco de dados: " . htmlspecialchars($e->getMessage()) . "</p>";
    exit;
}

