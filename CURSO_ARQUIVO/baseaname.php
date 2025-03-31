<?php

    $valor = "localhost/phpmyadmin/index.php";

    //apos a variavel o valor passado é o "suficson"(opcional), passamos o valor q queremos retirar do caminho
    $aquivo = basename($valor,".php"); 
    $aquivo = basename($valor,".php");

    echo "Nome do arquivo " .$aquivo;

?>