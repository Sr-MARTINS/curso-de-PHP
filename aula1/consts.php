<?php

    //Constantes
//  DEFINE() - difinir o elemento / "TEXT" - nome da conts / "valor da contant"
define("TEXT", "Este é o valor da constante");
    
    //Para emprimir é so usar o nome da const
// echo TEXT;

    //PARA DEFINIRMOS CONSTANTE
    const valorConst = "testando <br/>";
    echo valorConst;

    //CONSTANTES MAGICA
    echo "Estamos na linha : ".__LINE__ ."<br/>" .PHP_EOL;
    echo "Caminho e nome do arquivo: " .__FILE__ ."<br/>" .PHP_EOL;
    echo "Diretorio do arquivo: " .__Dir__ ."<br/>" .PHP_EOL;
?>