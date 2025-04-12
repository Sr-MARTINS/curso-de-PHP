<?php

    require_once 'Caneta.php';

    $c2 = new Caneta;

    $c2->modelo = "Big";
    $c2->cor = "Azul";
    // $c2->ponta = "0.4";

    $c2->tampar();
    $c2->destampar();

    echo "<pre>";
    print_r($c2);
    echo "</pre>";

    $c2->rabiscar();