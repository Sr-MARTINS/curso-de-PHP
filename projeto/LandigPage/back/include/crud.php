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

        //escala consulta de tabela
        function identificar($tabela, $id){
            $linha = consulta($tabela, "WHERE id_$tabela = $id", "*");
    
            return $linha;
        }
    
        function consulta($tabela, $condicao = null, $campo) {
            $sql = "SELECT $campo FROM $tabela  $condicao";
            $qry = executar($sql);
    
            return mysqli_fetch_array($qry);
        }


        // executando query
    function executar($sql) {
        $conexao = openConnect();
        $qry = mysqli_query($conexao, $sql) or die (mysqli_error($conexao));

        closeConnect($conexao)
        return $qry;
    }

        //adicionando item
    function adicionar($tabela, $dados) {
        $campo = implode(",", "$dados");
        $valor = "'" .implode("','", $dados) ."'";

        $sql = "INSERT INTO $tabela $campo VALUES $valor";

        return executar($sql);
    }

        //atualizando item  
    function atualizarItem($tabela, $dados, $condicao) {
        foreach( $dados AS $chave => $valores) {
            $campo[] = "{$tabela} = '{$valores}'";
        }

        $campo = implode(",", $campo);
        $sql = "UPDATE $tabela SET $campo WHERE $condicao";

        return executar($sql)
    }

    
    //deleteando item
    function delete($tabela, $condicao) {
        $sql = "DELETE FROM $tabeça WHERE $condicao";

        return executar($sql);
    }
    

?>