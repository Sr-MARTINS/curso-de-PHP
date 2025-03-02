<?php
    // $meses = [
    //     "janeiro",
    //     "fervereiro",
    //     "março",
    //     "abril",
    //     "maio",
    //     "junho",
    //     "dezembro"
    // ];

        // "in_array" - Busca um array por um valor especifico
    // $valor = "dezembro";

    // if( in_array($valor, $meses) ) {
    //     echo "O valor " .$valor ." esta no array";
    // }else {
    //     echo $valor ." Não esta presente";
    // }

        // "array_keys()" -retorna um array consistindo de todas as chaves localizaas em um array
    $meses["janeiro"] = "conf";
    $meses["fervereiro"] = "carnaval";
    $meses["marco"] = "aniversario";
    $meses["abriu"] = "semana santa";

        // $chaves = array_keys($meses);
    // $chaves = array_values($meses);
    // print_r($chaves);
    // echo "Emprimindo as chaves " .$chaves;

        //MOVENDO O PONTO DO ARRAY;
        // "next()" - retorna o valor na posição seguinte ao item do array
    echo "resistro atual " .current($meses) ."<br>"; 
    echo "resistro seguinte " .next($meses) ."<br>";
    echo "resistro anterior " .prev($meses);
?>