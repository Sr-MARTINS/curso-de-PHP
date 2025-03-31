<?php

    include "funcao_id.php";

    $nome         = $_POST["nome"];
    $email        = $_POST["email"];
    $telefone     = $_POST["telefone"]; 

    if($nome != "" ) {
        
        $pont = fopen("cliente.txt", "at");
        flock($pont, LOCK_EX);  //bloquear escrita

        $valores = novo_id()."\t".$nome."\t".$email."\t".$telefone."\n";
        
        fwrite($pont, $valores, strlen($valores));
        flock($pont, LOCK_UN);
        fclose($pont);

        echo  "<script>alert('Email enviado com Sucesso!);</script>";
        header('location: index.php?link=5');
    }else {
        echo "<script> alert('erro')</script>";
        header("Location:index.php?link=2");
    }
?>