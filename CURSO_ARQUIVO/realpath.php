<?php

// $caminho = "localhost/phpmyadmin/index.php";
$caminho = "../";

$arquivo = realpath($caminho);

echo "Caminho: " .$caminho ."<br>";
var_dump($arquivo);
?>