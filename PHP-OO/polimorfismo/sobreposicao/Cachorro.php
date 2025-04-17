<?php

    require_once 'Mamifero.php';

    class Cachorro extends Mamifero
    {

        public function emitirSom()
        {
            echo "Au Au<br>";
        }

        public function enterrarOsso()
        {
            echo "Enterrando osso<br>";
        }
        public function abanarRabo()
        {
            echo "Abanando o rabo <br>";
        }
    }