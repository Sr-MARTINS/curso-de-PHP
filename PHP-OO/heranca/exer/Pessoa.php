<?php

    abstract class Pessoa
    {
        protected $nome;
        private $idade;
        private $sexo;

        public function fazerAniv()
        {
            $this->idade++;
        }

        public function __construct($nome, $idade, $sexo)
        {
            $this->nome  = $nome;
            $this->idade = $idade;
            $this->sexo  = $sexo;
        } 

        public function getNome()
        {
            $this->nome;
        }
        public function setNome($nome)
        {
            $this->nome = $nome; 
        }

        public function getIdade()
        {
            return $this->idade;
        }
        public function setidade($idade)
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
    }