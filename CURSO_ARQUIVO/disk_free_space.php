<?php

    $conexao = "../";
    $aquivo = disk_free_space($conexao);

    //para ficar mais facil podes transformar isso em GB
    $gb = round("$arquivo / 1073741824, 2");

    echo "Valor de armazenamento em MB: " .$aquivo ."<br>";
    echo "Valor de armazenamento em GB: " .$gb;

?>