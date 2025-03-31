<?php

        // O "file" transforma nosso arquivo em array
    $arquivo = file("meuarquivo.txt");

    foreach($arquivo as $valor) {
        // echo $valor ."<br>";

            //pegando apenas o item q queremos do array
        list($nome, $email) = explode(" ", $valor);
        // echo $nome ."<br>";

            //tansformando em nome como link - retornando o nome
        echo "<a href=\"Nome:$email\"> $nome </a> <br>";    
        
    }

    // if($arquivo) {
    //     echo "lendo conteudo";
    // }else {
    //     echo "erro";
    // }

?>