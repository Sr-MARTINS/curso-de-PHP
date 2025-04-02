<?php

    var_dump($_FILES);

    $tamanho_max = 200000;
    $caminho = "C:/xampp/htdocs/cursoPHP/CURSO_ARQUIVO/upload/destino";
    
    $nome_arquivo = $_FILES['arquivo']["name"];
    $tamanho_arquivo = $_FILES['arquivo']["size"];
    $arquivo_temp = $_FILES['arquivo']["tmp_name"];

    $extensao = strrchr($nome_arquivo, ".");  
    $extensoes = array(".png", ".jpg", ".img", ".gif");

    if(!empty($nome_arquivo)) {
        if(!in_array($extensao, $extensoes)){
           die("aplicação invalida");
        } 
        if($tamanho_arquivo > $tamanho_max) {
            die("arquivo muito grande");
        }if(file_exists($caminho ."/" .$nome_arquivo)){
            die("arquivo ja existe");
        }
        if(move_uploaded_file($arquivo_temp, $caminho ."\ " .$nome_arquivo)) {
            echo "enviado com sucesso";
        }else {
            echo "erro no envio";
        }
    }else {
        echo "o arquivo nao tem nome";
    }
?>