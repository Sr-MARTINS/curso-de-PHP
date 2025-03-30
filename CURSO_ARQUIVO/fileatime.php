<?php

    $conexao = "filesize.php";
    $horario = fileatime($conexao);

    $data = date("d/m/Y H:i:s", $horario);

    echo "Ultimo horario que o arquivo 'filesize.php' foi acessado: " .$data ;

?>