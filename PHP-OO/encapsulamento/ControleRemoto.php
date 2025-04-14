<?php
    require_once 'Controlador.php';

    class ControleRemoto implements Controlador 
    {

        private $volume;
        private $ligar;
        private $tocando;

        public function __construct() 
        {
            $this->ligar = false;
            $this->volume = 50;
        }

        private function getVolume()
        {
            return $this ->volume;
        }
        private function setVolume($volume)
        {
            $this ->volume = $volume;
        }

        private function getLigar()
        {
            return $this->ligar;
        }
        private function setLigar($ligar)
        {
            $this->ligar = $ligar;
        }

        private function getTocando()
        {
            return $this->tocando;
        }
        private function setTocando($tocando)
        {
            $this->tocando = $tocando;
        }

        public function ligar()
        {
            $this->setLigar(true);
            $this->setVolume(50);
        
            // echo "Controle ligado";
        }

        public function desligar()
        {
            $this->setLigar(false);
            $this->setVolume(0);
        
        }

        public function abrirMenu()
        {
            echo "Esta ligado: " . ($this->getLigar() ? "Sim" : "Nao") ."<br>";
            echo "Esta tocando: " . ($this->getTocando() ? "Sim" : "Não") ."<br>";
            
            echo "Volume: " . $this->getVolume() ;
            for($i = 0; $i <= $this->getVolume(); $i += 10) {
                echo  " | ";
            }
            echo "<br>";
        }

        public function fecharMenu()
        {
            echo "Fechar menu";
        }

        public function maisVolume()
        {
            if($this->getLigar()){
                $this->setVolume( $this->getVolume() + 5);
                echo "Volume:" .($this->getVolume());
            }
        }

        public function menosVolume()
        {
            if($this->getLigar()){
                $this->setVolume( $this->getVolume() - 5);
                echo "Volume:" .($this->getVolume());
            }
        }

        public function ligarMudo()
        {
            if($this->getLigar() && $this->getVolume() > 0){
                $this->setVolume(0);
                echo "Volume mudo";
            }
        }

        public function desligarMudo()
        {
            if($this->getLigar() && $this->getVolume() < 0) {
                $this->setVolume(50);
                echo "Volue " .($this->getVolume());
            }
        }

        public function play()
        {
            if($this->getLigar() && !$this->gettocando()){
                $this->setTocando(true);
                echo "Tocando";
            }
        }

        public function pause()
        {
            if($this->getLigar() && $this->getTocando()){
                $this->setTocando(false);
                echo "Pausado";
            }
        }


    }
