<?php

    $nome         = $_POST["nome"];
    $email        = $_POST["email"];
    $telefone     = $_POST["telefone"]; 

    
    $pont = fopen("cliente.txt", "at");
    flock($pont, LOCK_EX);  //bloquear escrita

    $valores = $nome ."\t" .$email ."\t" .$telefone ."\n";

    fwrite($pont, $valores, strlen($valores));
    flock($pont, LOCK_UN);
    fclose($pont);

?>