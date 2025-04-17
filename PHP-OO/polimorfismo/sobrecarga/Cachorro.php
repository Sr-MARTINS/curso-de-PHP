<?php

    require_once 'Lobo.php';

    class Cachorro extends Lobo
    {
        public function emitirSom()
        {
            echo "Au! Au! Au!<br>";
        }

        public function reagirFrase($frase)
        {
            if($frase == "toma comida" || $frase == "Ola"){
                echo "Abanar e latir<br>";
            }else if($frase == "Vai apanhar"){
                echo "Rosnar<br>";
            }
        }

        public function reagirHora($hora)
        {
            if($hora < 12){
                echo "Abanar";
            
            } elseif($hora >= 18){
                echo "Ignorar";
            
            } else{
                echo "Abanar e Latir";
            }
        }

        public function reagirDono($dono)
        {
            if($dono){
                echo "Abanar";
            
            } else {
                echo "Rosnar e Latir";
            }
        }
        
    }