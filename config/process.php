<?php

    session_start();

    include_once("connection.php");
    include_once("url.php");

    if(!empty($_GET)){
        $id = $_GET['id'];
    } 

    // Retorna dados de apenas um contato
    if(!empty($id)){
        $query = "SELECT * FROM contacts WHERE id = :id";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $contact = $stmt->fetch();
    } else {
        $contacts = [];
        
        $query = "SELECT * FROM contacts";
        $stmt = $conn->prepare($query);
        $stmt->execute();

        $contacts = $stmt->fetchAll();
    }
    