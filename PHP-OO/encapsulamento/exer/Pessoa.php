<?php

    class Pessoa
    {
        private $nome;
        private $idade;
        private $sexo;

        public function __contruct($nome, $idade, $sexo)
        {
            $this->$nome = "";
            $this->$idade = 0;
            $this->$sexo = null;
        }

        public function getNome()
        {
            return $this->nome;
        }
        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function getIdade()
        {
            return $this->idade;
        }
        public function setIdade($idade)
        {
            $this->idade = $idade;
        }

        public function getSexo()
        {
            return $this->sexo;
        }
        public function setSexo($sexo)
        {
            $this->sexo = $sexo;
        }

        public function fazerAniversario(){}
    }