<?php

    DEFINE('SERVIDOR','localhost');
    DEFINE('USER','root');
    DEFINE('PASS','');
    DEFINE('DB','sistproduto');
    DEFINE('CHARSET','Utf8');

    $conexao = mysqli_connect(SERVIDOR, USER, PASS, DB) or die (mysqli_connect_error());

    mysqli_set_charset($conexao, CHARSET) or die (mysqli_error($conexao));
?>