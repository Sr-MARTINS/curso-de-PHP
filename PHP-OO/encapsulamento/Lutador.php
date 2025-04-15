<?php

    class Lutador
    {
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitoria;
        private $derrota;
        private $empate;

        public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitoria, $derrota, $empate)
        {
            $this->nome          = $nome;
            $this->nacionalidade = $nacionalidade;
            $this->idade         = $idade;
            $this->altura        = $altura;
            $this->setPeso($peso);
            $this->peso          = $peso;
            $this->vitoria       = $vitoria;
            $this->derrota       = $derrota;
            $this->empate        = $empate; 
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this ->nome = $nome;
        }

        public function getNacionalidade(){
            return $this->nacionalidade;
        }

        public function setNacionalidade($nacionalidade){
            $this->nacionalidade = $nacionalidade;
        }

        public function getIdade(){
            return $this->idade;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        }

        public function getAltura(){
            return $this-> altura;
        }
        public function setAltura($altura){
            $this->altura = $altura;
        }

        public function getPeso(){
            return $this->peso;
        }
        public function setPeso($peso){
            $this->peso = $peso;
            $this->setCategoria();

        }

        public function getCategoria(){
            return $this->categoria;
        }
        private function setCategoria(){

            if($this->peso < 52.2){
                $this->categoria = "Invalido";

            }else if ($this->peso <= 70.3){
                $this->categoria = "Leve";
            
            }else if($this->peso <= 83.9) {
                $this->categoria = "Medio" ;
            
            }else if($this->peso <= 120.2){
                $this->categoria = "Pesado";
            }

        }
        

        public function getVitoria(){
            return $this->vitoria;
        }
        public function setVitoria($vitoria){
            $this->vitoria = $vitoria;
        }

        public function getDerrota(){
            return $this->derrota;
        }
        public function setDerrota($derrota){
            $this->derrota = $derrota;
        }

        public function getEmpate(){
            return $this->empate;
        }
        public function setEmpate($empate){
            $this->empate = $empate;
        }


        public function apresentar()
        {
            echo "--------------------------------------<br>";
            echo "<h2>Apresentação do Lutador</h2>";
            echo "Lutador: "       .$this->getNome()          ."<br>";
            echo "Nacionalidade: " .$this->getNacionalidade() ."<br>";
            echo "Idade: "         .$this->getIdade()         ."<br>";
            echo "Altura: "        .$this->getAltura()        ."<br>";
            echo "Peso: "          .$this->getPeso()          ."<br>";
            echo "Vitorias:"       .$this->getVitoria()       ."<br>";
            echo "Derrotas: "      .$this->getDerrota()       ."<br>";
            echo "Empates: "       .$this->getEmpate()        ."<br>";
        }

        public function status()
        {
            echo "--------------------------------------<br>";
            echo "Nome: "              .$this->getNome()      ." <br>";
            echo "É um lutador peso: " .$this->getCategoria() ." <br>";
            echo "Ganhando: "          .$this->getVitoria()   ." Lutas"     ."<br>";
            echo "Com "                .$this->getDerrota()   ." Derrotas"  ."<br>";
            echo "E "                  .$this->getEmpate()    ." Empate"    ."<br>";
        }
        public function ganharLuta()
        {
            $this->setVitoria($this->getVitoria() + 1);
        }
        public function derrotaLuta()
        {
            $this->setDerrota($this->getDerrota() + 1);
        }
        public function lutaEmpate()
        {
            $this->setEmpate($this->getEmpate() + 1);
        }

    }