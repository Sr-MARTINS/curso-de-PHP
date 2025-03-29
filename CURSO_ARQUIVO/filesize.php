<?php

$conexao = "../";
$arquivo = realpath($conexao);

$tamanho = filesize($arquivo);

echo "caminho: " .$arquivo ."<br>";
echo "tamanho: " .$tamanho ."<br>";

var_dump($tamanho);

?>