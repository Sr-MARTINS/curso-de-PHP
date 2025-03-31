<?php

    function novo_id() {
        $nomeArquivo = "id_cliente.txt";
        
        if(file_exists($nomeArquivo)) {
            $id = file_get_contents($nomeArquivo);
            $id = trim($id);
            $id++ ;

            $arquivo = fopen($nomeArquivo, 'w+');

            flock($arquivo, LOCK_EX);
            fwrite($arquivo, $id);
            flock($arquivo, LOCK_UN);

            return $id;
            fclose($arquivo);
        }else{
            $id = 1;
            
            $arquivo = fopen($nomeArquivo, 'w');

            flock($arquivo, LOCK_EX);
            fwrite($arquivo, $id);
            flock($arquivo, LOCK_UN);
            
            fclose($arquivo);

            return $id;
        }
    }

?>