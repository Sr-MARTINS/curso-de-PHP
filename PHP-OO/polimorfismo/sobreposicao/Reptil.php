<?php

    require_once 'Animal.php';

    class Reptil extends Animal
    {
        private $corEscama;

        
        public function locomover()
        {
            echo "Rastejando<br>";
        }
        public function alimentar()
        {
            echo "Comendo vegetais<br>";
        }
        public function emitirSon()
        {
            echo "Emitir som de Reptil<br>";
        }
        
        public function corEscama(){}
        
        public function getCorEscama()
        {
            return $this->corEscama;
        }
        public function setCorEscama($corEscama)
        {
            $this->corEscama = $corEscama;
        }
        
    }