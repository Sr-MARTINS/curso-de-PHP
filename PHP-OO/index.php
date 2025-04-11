<?php
    require_once 'Caneta.php';

    $c1 = new Caneta;

        //chamando e passanda valores para atributas (variaveis)
    $c1->modelo = "Big";
    $c1->cor = "Preta";
    $c1->ponta = 0.5;
    $c1->carga = 80;
    // $c1->tampa = true;

        //chamando metodo (metodos)
    $c1->destampar();
    // $c1->rabiscar();
    
    // print_r($c1);

    $c2 = new Caneta;
    $c2->cor = "Vermellha";
    $c2->carga = 50;
    $c2->destampar();

    // print_r($c2); 


        require 'Pessoa.php';

    $pessoa1 = new Pessoa;
    $pessoa1->nome = "Martins";
    $pessoa1->idade = 20;
    $pessoa1->corOlhos = "Marron";
    $pessoa1->corPele = true;

    $pessoa1->pele();
    echo "<hr>";

    print_r($pessoa1);