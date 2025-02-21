<?php

    $num_anterior = 0;
    $atual = 1;
    $novo_num = 0;

    $resut = "1";

    for($i = 0; $i <= 15; $i++) {
        $novo_num = $num_anterior + $atual;
        $num_anterior = $atual;
        $atual = $novo_num;

        $resut .= " " .$novo_num;
    }

    echo $resut;