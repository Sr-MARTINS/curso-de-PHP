<?php
    require_once('Lutador.php');

    class Luta
    {
        private $desafiado ;
        private $desafiante;
        private $rounds;
        private $aprovada;


        public function getDesafiado()
        {
            return $this->desafiado;
        }
        public function setDesafiado($desafiado)
        {
            $this->desafiado = $desafiado;
        }

        public function getDesafiante()
        {
            return  $this->desafiante;
        }
        public function setDesafiante($desafiante)
        {
            $this->desafiante = $desafiante;
        }

        public function getRounds()
        {
            return $this-> rounds;
        }
        public function setRounds($rounds)
        { 
            $this->rounds = $rounds;
        }

        public function getAprovada()
        {
            return $this-> aprovada;
        }
        public function setAprovada($aprovada)
        {
            $this->aprovada = $aprovada;
        }


        public function marcarLuta($lutador1, $lutador2)
        {
            if($lutador1->getCategoria() === $lutador2->getCategoria() && ($lutador1 != $lutador2)) {
                $this->aprovada  = true;
                $this->desafiado = $lutador1;
                $this->desafiante = $lutador2;
            } else {
                $this->aprovada      = false;
                $this->desafiado     = null;
                $this->desafiante    = null;
            }
        }
        public function lutar()
        {                                                                                                                                                        
            if($this->getAprovada(true)){
                $this->desafiado->apresentar();
                $this->desafiante->apresentar();
                
                $geradorDeGanhador = rand(0,2);

                if($geradorDeGanhador == 0) {
                    echo "A luta empatou! <br>";
                  
                    $this->desafiante-> lutaEmpate();
                    $this->desafiado -> lutaEmpate();
                
                } else if($geradorDeGanhador == 1) {
                    echo "O lutador: " . $this->desafiante-> getNome() ." é o vencedor <br>";
                    
                    $this->desafiante ->ganharLuta(); 
                    $this->desafiado  ->derrotaLuta();
                } else if ($geradorDeGanhador == 2) {
                    echo "O lutador " .$this->desafiado->getNome() ." é o vencedor <br>";
                    $this->desafiado ->ganharLuta();
                    $this->desafiante ->derrotaLuta();
                }
                
                // var_dump($this->desafiante);
                // var_dump($this->desafiado-> getNome());
            }else {
                echo "Luta não pode acontecer";
            }
        }

    }