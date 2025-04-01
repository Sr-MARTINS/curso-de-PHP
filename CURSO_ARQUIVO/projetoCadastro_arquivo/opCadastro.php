<?php

    include "funcao_id.php";

    $nome         = $_POST["nome"];
    $email        = $_POST["email"];
    $telefone     = $_POST["telefone"]; 

    $acao = $_POST["acao"];
    $linha = $_POST["linha"];
    $id = $_POST["id"];

    if(@$acao == "Cadastrar"){
        if($id != " ") {
            $pont = fopen("cliente.txt", "at");
            flock($pont, LOCK_EX);  //bloquear escrita

            $valores = novo_id()."\t".$nome."\t".$email."\t".$telefone."\n";
            
            fwrite($pont, $valores, strlen($valores));
            flock($pont, LOCK_UN);
            fclose($pont);

            echo  "<script>alert('Email enviado com Sucesso!);</script>";
            header('location: index.php?link=5');
        } 
        
    }
    elseif(@$acao == "Editar") {

        $novo_valor = novo_id()."\t".$nome."\t".$email."\t".$telefone."\n";
        
        $arquivo = file("cliente.txt");
        $arquivo[$linha] = $novo_valor;

        file_put_contents("cliente.txt", $arquivo);

        echo  "<script>alert('Email enviado com Sucesso!);</script>";
        header('location: index.php?link=5');

    }
    elseif(@$acao == "Excluir") {
        
        $arquivo = file("cliente.txt");
        
        unset($arquivo[$linha]);
    
        file_put_contents("cliente.txt", $arquivo);

        echo  "<script>alert('Email enviado com Sucesso!);</script>";
        header('location: index.php?link=5');
    }
?>