<?php

    require_once 'Pessoa.php';
    require_once 'Publicacao.php';

    class Livro implements Publicacao
    {
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        public function __construct($titulo, $autor, $totPaginas, $leitor)
        {
            $this->titulo     = $titulo;
            $this->autor      = $autor;
            $this->totPaginas = $totPaginas;
            $this->pagAtual   = 0;
            $this->aberto     = false;
            $this->leitor     = $leitor;
        }


        public function getTitulo()
        {
            return $this->titulo;
        }
        public function setTitulo($titulo)
        {
            $this->titulo = $titulo;
        }

        public function getAutor()
        { 
            return $this->autor;
        }
        public function setAutor($autor)
        {
            $this->autor = $autor;
        }

        public function getTotPaginas()
        {
            return $this->totPaginas;
        }
        public function setTotPaginas($totPaginas)
        {
            $this->totPaginas = $totPaginas;
        }
        
        public function getPagAtual()
        {
            return $this->pagAtual;
        }
        public function setPagAtual($pagAtual)
        {
            $this->pagAtual = $pagAtual;
        }

        public function getAberto()
        {
            return $this->aberto;
        }
        public function setAberto($aberto)
        {
            $this->aberto = $aberto;
        }

        public function getLeitor()
        {
            return $this->leitor;
        }
        public function setLeitor($leitor)
        {
            $this->leitor = $leitor;
        }

        public function detalhes(){
            if($this->aberto) {
                echo "Titulo do livro: "            .$this->titulo ."<br>";
                echo "Autor: "            .$this->autor ."<br>";
                echo "total de paginas: " .$this->totPaginas ."<br>";
                echo "pagina Atual: "     .$this->pagAtual ."<br>";
                echo "Leitor: "           .$this->leitor->getNome();
            }
        }

        public function abrir()
        {
            $this->aberto = true;
        }
        public function fechar()
        {
            $this->aberto = false;
        }
        public function folhear($p)
        {
            if($p > $this->totPaginas){
                $this->pagAtual = 0;
            
            } else {
                $this->pagAtual = $p;
            }
        }
        public function avancarPag()
        {
            if($this->aberto){
                if($this->pagAtual > $this->totPaginas)
                {
                    $this->pagAtual++;
                    
                } else {
                    echo "Algum elemento esta faltando para poder avançar de pagina <br>";
                }
            }
        }
        public function voltarPag()
        {
            if($this->aberto && $this->pagAtual > 0)
            {
                $this->pagAtual--;
            
            } else {
                echo "Se vc não esta conseguindo, algum elemento esta faltando <br>";
            }
        }

    }
    //  var_dump($this->getTitulo());
