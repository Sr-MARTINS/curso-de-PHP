<?php

    require_once 'Mamifero.php';

    class Canguru extends Mamifero
    {

        

        public function usarBolsa()
        {
            echo "Usando bolsa<br>";
        }
        public function locomover()
        {
            echo "Saltando<br>";
        }
    }