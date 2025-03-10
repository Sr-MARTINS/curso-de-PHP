<?php
    // include "funcaoSoma02.php"
    // echo $data2 = somarData($data,1,0,0);
    $data = new DateTime("20-04-yy2003");

    $data->modify('+1 month');

    echo $data->format('d/m/Y');
?>