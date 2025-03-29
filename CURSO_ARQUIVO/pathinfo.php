<?php

$caminho = "localhost/phpmyadmin/index.php";
$arquivo = pathinfo($caminho);

echo "caminho: "   .$caminho ."<br>";
echo "dirname: "   .$arquivo["dirname"] ."<br>";
echo "basename: "  .$arquivo["basename"] ."<br>";
echo "extension: " .$arquivo["extension"] ."<br>";
echo "filename: "  .$arquivo["filename"] ."<br>";

var_dump($arquivo);

?>