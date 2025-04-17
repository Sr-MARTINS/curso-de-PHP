<?php

    require_once "Animal.php";

    class Peixe extends Animal
    {
        private $corEscama;

        public function locomover()
        {
            echo "Nadando<br>";
        }
        public function alimentar()
        {
            echo "Comendo substâncias<br>";
        }
        public function emitirSom()
        {
            echo "Glub Glub<br>";
        }

        public function soltarBolha()
        {
            echo "Soltou uma bolha<br>";
        }

        public function getCorEscama()
        {
            return $this->corEscama;
        }
        public function setCorEscama($corEscama)
        {
            $this->corEscama = $corEscama;
        }


    }