<?php

    require_once 'Aluno.php';

    class Bolsista extends Aluno
    {
        private $bolsa;
        private $renovarBolsa;

        public function renovarBolsa()
        {
            echo "Bolsa renovada <br>";
        }
        
        public function pegarMensalidade()
        {
            echo "{$this->nome} é bolsista! Entt paga com desconto <br>";
            
        }

        public function getBolsa()
        {
            return $this->bolsa;
        }
        public function setBolsa($bolsa)
        {
            $this->bolsa = $bolsa;
        }	

        public function getRenovalBolsa()
        {
            return $this->renovarBolsa;
        }
        public function setRenovalBolsa($renovarBolsa)
        {
            $this->renovarBolsa = $renovarBolsa;
        }

    }