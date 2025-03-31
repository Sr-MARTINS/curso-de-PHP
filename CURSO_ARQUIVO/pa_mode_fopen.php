<?php
        // 'r' - ler o arquivo
        // $arquivo = fopen("meuarquivo.txt", 'r');

        // 'w' - se tiver arquivo, limpa e cria / caso não tenho so cria
    $arquivo = fopen("meuarquivo.txt", 'w');

    if($arquivo){
        echo "aquivo aberto";
    }else{
        echo "erro";
    }

?>