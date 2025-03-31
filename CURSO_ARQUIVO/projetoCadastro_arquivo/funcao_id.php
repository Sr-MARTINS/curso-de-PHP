<?php

    function novo_id() {
        $nomeArquivo = "id_cliente.txt";
        if(file_exists($nomeArquivo)) {
            $id = file_get_contents($nomeArquivo);
            $id = chop($id);
            $id++ ;
        }else{
            $id = 1;

            $arquivo = fopen($nomeArquivo, 'w');
            fwrite($arquivo , $id);
            fclose($arquivo);

            return $id;
        }
    }

?>