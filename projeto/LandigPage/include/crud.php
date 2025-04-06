<?php
    require_once("config.php");

    function openConnect() {
        $conexao = mysqli_connect(SERVIDOR, USER, PASSWORD, DB) or die (mysqli_connect_error($conexao));
        mysqli_set_charset($conexao, CHARSET);

        return $conexao;
    }

    function closeConnect($conexao) {
        mysqli_close($conexao) or die (mysqli_error($conexao));
    
        return $conexao;
    }

        // executando query
    function executar($sql, $id = false) {
        $conexao = openConnect();
        $qry = @mysqli_query($conexao, $sql) or die (mysqli_error($conexao));

        if ($id) 
            $qry = mysqli_insert_id($conexao);
        

        closeConnect($conexao);
        return $qry;
    }


        //consultando 
    function consultar($tabela, $condicao=null, $campos = "*") {
        $condicao = ($condicao != null) ? " WHERE " . $condicao : "";

        $sql = "SELECT {$campos} FROM {$tabela}     {$condicao}";

        $qry = executar($sql);

        if (!mysqli_num_rows($qry)) {
            return false;
        }else {
            while ($linha = mysqli_fetch_assoc($qry)) {
                $dados[] = $linha;
            }
        return $dados;
        }
    } 


        //adicionando item
    // function inserir($tabela, array $dados, $id = false) {
    //     $valies = escapa($valies);
    //     $campos = implode(",", array_keys($valies));
    //     $valores = "'" .implode("','", $dados) ."'";

    //     $sql = "INSERT INTO $tabela $campo VALUES $valores";

    //     return executar($sql, $id);
    // }

    function inserir($tabela, array $dados) {
        $campos = implode(",", array_keys($dados));
        $valores = "'" .implode("' ,'", $dados) ."'";

        $sql = "INSERT INTO $tabela ({$campos}) VALUES ({$valores})";
       
        return executar($sql);

    }

        //atualizando item  
    function atualizarItem($tabela, $dados, $condicao) {
        foreach( $dados AS $chave => $valores) {
            $campo[] = "{$chave} = '{$valores}'";
        }

        $campo = implode(",", $campo);
        $sql = "UPDATE $tabela SET $campo WHERE $condicao";

        return executar($sql);
    }

    
    //deleteando item
    function delete($tabela, $condicao) {
        $sql = "DELETE FROM $tabela WHERE $condicao";

        return executar($sql);
    }
    

?>