<?php
    require_once 'Caneta.php';

    $c1 = new Caneta;

        //chamando e passanda valores para atributas (variaveis)
    // $c1->modelo = "Big";
    // $c1->cor = "Preta";
    // $c1->ponta = 0.5;
    // $c1->carga = 80;
    // $c1->tampa = true;

        //chamando metodo (metodos)
    // $c1->destampar();
    // $c1->rabiscar();


    //     require 'Pessoa.php';

    // $pessoa1 = new Pessoa;
    // $pessoa1->nome = "Martins";
    // $pessoa1->idade = 20;
    // $pessoa1->corOlhos = "Marron";
    // $pessoa1->corPele = true;

    // $pessoa1->pele();
    // echo "<hr>";

    // print_r($pessoa1);

    require_once 'Garrafa.php';

        // Construindo um objeto da classe Garrafa
    // $g1 = new Garrafa("Branca", "aberta", "agua", 100);
    // echo "<pre>";
    // print_r($g1);

    
    // $g1->tampa = true;
    // $g1->tampar();
    // echo "<br>";

        $g2 = new Garrafa();
        $g2 -> setCor("Azul");
    
    echo "<pre>";
    print_r($g2);

