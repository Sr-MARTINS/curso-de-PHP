<?php

    require_once 'Pessoa.php';

    class Gafanho extends Pessoa
    {
        private $login;
        private $totAssistido;

        public function viuMiasUm()
        {
            $this->totAssistido++;
            echo "Assistido mais uma Aula !<br>";
        }

        public function ganharExo()
        {
            echo "O aluno " .$this->getNome() ."Ganhou mais experiencia !<br>";
        }

        public function __construct($nome, $idade, $sexo, $login)
        {
            $this->nome         = $nome;
            $this->idade        = $idade;
            $this->sexo         = $sexo;
            $this->login        = $login;
            $this->totAssistido = 0;
        }

        public function getLogin()
        {
            return $this->login;
        }
        public function setLogin($login)
        {
            $this->login = $login;
        }

        public function getTotAssistido()
        {
            return $this->totAssistido;
        }
        public function setTotAssistido($totAssistido)
        {
            $this->totAssistido = $totAssistido;
        }
        
    }