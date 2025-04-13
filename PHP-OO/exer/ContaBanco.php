<?php

    class ContaBanco 
    {
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;



        public function setNunConta($numConta){
            $this->numConta = $numConta;
        }
        public function getNunConta() {
            return $this->numConta;
        }

        public function setTipo($tipo){
            $this->tipo = $tipo;
        }
        public function getTipo(){
            return $this->tipo;
        }

        public function setDono($dono){
            $this->dono = $dono;
        }
        public function getDono(){
            return $this->dono;
        }

        public function setSaldo($saldo){
            $this->saldo = $saldo;
        }
        public function getSaldo(){
            return $this->saldo;
        }

        public function setStatus($status){
            $this->status = $status;
        }
        public function getStatus(){
            return $this->status;
        }


        public function __construct()
        {
            $this->saldo = 0;
            $this->status  = false;
        }

        public function abrirConta($tipo){

            $this->setTipo($tipo);
            $this->setStatus(true);

            if($tipo == "CC") {
                $this->setSaldo(50);

            } else if($tipo == "CP") {
                $this->setSaldo(150);
            }
        }
        
        public function fecharConta(){
            if($this->getSaldo() > 0 || $this->getSaldo() < 0) {
                echo "Para fechar conta voce precisa esta com o saldo zerado <br>";
            }else {
                $this->setStatus (false);
                echo "Conta fechada com sucesso <br>";
            }
        }

        

        public function depositar($valor){
            if($this->getStatus(true)) {
               $this->setSaldo($this->getSaldo() + $valor);
                echo "Deposito de $valor foi realizado na conta de {$this->getDono()} com sucesso <br>";
            }else {
                echo "Inposivel de depositar";
            }
        }

        public function sacar($valor){
            if($this->getStatus(true)){
                if($this->getSaldo() > 0) {
                    $this->setSaldo($this->getSaldo() - $valor);
                        echo "Saque de $valor realizado na conta de(a) {$this->getDono()} com sucesso <br>";
                } else {
                    echo "Voce nao tem saldo";
                }
            } else {
                echo "Imposivel sacar";
            }
        }

        public function pagarMensal(){
            if($this->getTipo() == "CC") {
                $valor = 12;
            } else if($this-> getTipo() == "CP") {
                $valor = 20;
            }
        
            if($this->getStatus(true)) {
                if($this->getSaldo() > 0) {
                    $this->setSaldo($this->getSaldo() - $valor);
                }else {
                    echo "Saldo Insuficiente";
                }
            } else {
                echo "Imposivel pagar mensalidade";
            }
        }


    }