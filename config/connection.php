<?php

    $host = "127.0.0.1";
    $dbname = "agenda";
    $user = "admin";
    $pass = "12345678";

    try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

        // Ativar modo de debug de erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch(PDOException $e) {
        // Erro na conexão
        $error = $e->getMessage();
        echo "Error: $error";
    }

  
?>