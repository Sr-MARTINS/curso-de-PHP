<?php

    $serverName = "localhost";
    $userName   = "root";
    $password   = "";
    $dbName     = "emprestimo_de_ferramenta";

    $conn = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password);
    
    $sql = $conn->prepare("SELECT * FROM ferramenta");

    $sql->execute();

    // $ferramentas = $sql->fetchAll();

    
    // $conn->exec("INSERT INTO usuario (usuario, email, senha) VALUES ('euDuasVezes','edu@gmail.com', '123')");
    $listUser = $conn->prepare("SELECT * FROM usuario");
    $listUser->execute();

    $usuarios = $listUser->fetchAll(PDO::FETCH_OBJ);
    

    $ferramentas = $sql->fetchAll(PDO::FETCH_OBJ);
    // $ferramenta = $ferramentas[0];


    echo "<pre>";
        // var_dump($ferramenta);
        // var_dump($ferramenta["ferramenta"]);

        // var_dump($ferramenta);
        // var_dump($ferramenta->ferramenta);

        var_dump($usuarios);
