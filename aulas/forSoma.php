<?php
    //ULTILIZANO O METODO (GET)
        // $a = $_GET["intA"];
        // $b = $_GET["intB"];
        // $soma = $a + $b;
       
    //FORMA MAIS "SIMPLES PARA FAZER A LIGAÇÃO DE ELEMENTOS"

        // $soma = $_GET["intA"] + $_GET["intB"]; 

    //ULTILIZANDO O METODDO (POST)
        // $soma = $_POST["intA"] + $_POST["intB"];
        // echo "A soma é : " .$soma;

    
    //ex - if - else
        // $soma = $_POST["intN1"] + $_POST["intN2"];
        // $media = $soma / 2;
        
        // if($media >= 7) {
        //     echo "aprovado <br> valor da media : " .$media;
        // }else if ($media >= 5 && $media >   = 6){
        //     echo "vc esta recuperação <br> valor da media : " .$media;
        // }else {
        //     echo "reprovado <br> valor da media : " .$media;
        // }

    //ex - funções
     $nota1 = $_POST["intN1"];
     $nota2 = $_POST["intN2"];
     $nota3 = $_POST["intN3"];
     $nota4 = $_POST["intN4"];
    
     function calcularMedia($n1, $n2, $n3, $n4) {
        $soma = ($n1 + $n2 + $n3 + $n3) / 4;
        return $soma;
     }

     echo "Media do aluno é :" . calcularMedia($nota1, $nota2, $nota3, $nota4);
?>