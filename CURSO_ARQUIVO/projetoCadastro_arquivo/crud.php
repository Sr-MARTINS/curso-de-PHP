<?php
    require("config.php");

    function openConnect() {
        $conexao = mysqli_connect(SERVIDOR, USER, PASSWORD, DB) or die (mysqli_connect_error());
        mysqli_set_charset($conexao, CHARSET);

        return $conexao;
    }

    function closeConnect($conexao) {
        mysqli_close($conexao) or die (mysqli_error($conexao));

        return $conexao;
    }

    function executar($sql) {
        $conexao = openConnect();
        $qyr = mysqli_query($conexao, $sql) or die (mysqli_error($conexao));

        closeConnect($conexao);
        return $qyr;
    }

    function consultarTabela($tabela) {
        $sql = "SELECT * FROM $tabela";
        
        return executar($sql);
    }

    function addItem($tabela, array $dados) {
        $campos = implode(",", array_keys($dados));
        $valores = "'" . implode("','", $dados) ."'";

        $sql = "INSERT INTO $tabela ({$campos}) VALUES ({$valores}) ";

        return executar($sql);
    }

    function atualizar($tabela, array $dados, $condicao) {
        foreach( $dados AS $chaves => $valores) {
            $campos[] = "{$chaves} = '{$valores}' ";
        }
        $campos = implode(",",  $campos);
        $sql = "UPDATE {$tabela} SET {$campos} WHERE {$condicao}";

        return executar($sql);
    }


    function delete($tabela, $condicao){
        $sql = "DELETE FROM $tabela WHERE $condicao";
        
        return executar($sql);
    }