<?php

    require_once "Pessoa.php";

    class Livro
    {
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;




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
                echo "Titulo:" .$this->titulo ."<br>";
                echo "Autor: " .$this->autor ."<br>";
                echo "total de paginas: " .$this->totPaginas ."<br>";
                echo "pagina Atual: " .$this->pagAtual ."<br>";
                echo "Leitor: " .$this->leitor->getNome();
            }
        }
    }