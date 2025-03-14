<?php
  
    // variaveis tipo "STRING" 
//   $nome = "Joao Victor";
//   $sobreNome1 = "Costa";
//   $sobreNome2 = "Martins";

      //Sua concatenação poe ser feita com ( . ) ou enforma de string dentro de aspas com ( , ou - )    
      //Ja para fazer a concatenação de variaevis q contem numeros usamors o ( + )
      
        // echo $nome .$sobreNome1 .$sobreNome2;     
        // echo $valor1 + $valor2;

    // escopo de variavel
        // $a = 1;
        // $b = 2;

        
        // function soma() {
            //$a = 5;
            //$b = 3;

           // echo $a + $b;

            //Para pegarmos variasveis globais podemos usar o ($GLOBALS)
            //echo $GLOBALS['a'] + $GLOBALS['b'];
        // }
    // soma();

        // Verificação de dado - Para fazermos a verificação usamos o ".gettyp()" 
            // Mais se formos fazer uma verificação usamos o " is_ " e o nome do possivelmento dado
    $element = 1;

    if(is_string($element)) {
        echo "Sua variavel é: string";
    }else {
        echo "O tipo da sua variavel é: " .gettype($element);
    };

?>