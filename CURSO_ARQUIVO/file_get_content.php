<?php

    //"file_get_contents" - usamos quando queremos transformar e guardar o item

    $arquivo = file_get_contents("meuarquivo.txt");

    $cliente = explode("\n", $arquivo);

    foreach($cliente as $dados) {
        list($nome, $email) = explode(" ", $dados) ;

        echo $nome ."<br>";
    }

?>