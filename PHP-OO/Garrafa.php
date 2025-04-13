<?php

    class Garrafa
    {
        public $cor;
        public $tampa;
        private $liquido;
        private $capacidade;

        // public function __construct($cor, $tampa, $liquido, $capacidade)
        // {
        //     $this->cor = $cor;
        //     $this->tampa = $tampa;
        //     $this->liquido = $liquido;
        //     $this->capacidade = $capacidade;
        // }

        public function tampar()
        {
            if($this->tampa == true){
                echo "A garrafa esta tampadada";
            } else {
                echo "A garrafa esta aberta";
            }
        }

        public function getCor()
        {
            $this->cor;
        }
        public function setCor($cor)
        {
            $this->cor = $cor;
        }
    }