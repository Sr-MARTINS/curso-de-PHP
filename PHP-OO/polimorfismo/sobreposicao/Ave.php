<?php

    require_once "Animal.php";

    class Ave extends Animal
    {
        private $corPena;

        public function locomover()
        {
            echo "Voando<br>";
        }
        public function alimentar()
        {
            echo "Comendo frutas<br>";
        }
        public function emitirSom()
        {
            echo "Som de ave<br>";
        }
        
        public function fazerNinho()
        {
            echo "Fazendo ninho<br>";
        }

        public function getCorPena()
        {
            return $this->corPena;
        }
        public function setCorPena($corPena)
        {
            $this->corPena = $corPena;
        }

    }