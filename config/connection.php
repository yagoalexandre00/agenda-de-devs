<?php

    $host = "mysql-db";
    $dbname = "agenda";
    $user = "root";
    $pass = "1234";
    $port = "3306";

    try{
        $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $pass);

        // Ativar modo de debug de erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch(PDOException $e) {
        // Erro na conexão
        $error = $e->getMessage();
        echo "Error: $error";
    }
?>
