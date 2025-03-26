<?php
    require("conexao.php");

    function abrirConexao() {
        $conexao = mysqli_connect(SERVIDOR, USER, PASS, DB) or die (mysqli_connect_error());
        mysqli_set_charset($conexao, CHARSET);

        return $conexao;
    };

    function fecharConexao($conexao) {
        mysqli_close($conexao) or die (mysqli_error($conexao));

        return $conexao;
    };

    function consulta($tabela, $condicao = null, $campo) {
        $sql = "SELECT $campo FROM $tabela  $condicao";
        $qry = executar($ql);

        return $qry;
    }

    function executar($sql) {
        $conexao = abrirConexao();
        $qry = @mysqli_query($conexao, $sql) or die (mysqli_error($conexao));

        fecharConexao($conexao);
        return $qry;
    };

    function adicionar($tabela, array $dados) {
        $campos = implode(",", array_keys($dados));
        $valores = "'" .implode("','", $dados) ."'";

        $sql = "INSERT INTO {$tabela} ({$campos}) VALUES  ({$valores})";

        return executar($sql);
    };

    function atualizar($tabela, array $dados, $condicao) {
        foreach( $dados AS $chaves => $valores) {
            $campos[] = "{$chaves} = '{$valores}' ";
        }
        $campos = implode(",",  $campos);
        $sql = "UPDATE {$tabela} SET {$campos} WHERE {$condicao}";

        return executar($sql);
    }

    function deletar($tabela, $condicao) {
        $sql = "DELETE FROM $tabela WHERE $condicao";

        return executar($sql);
    }

?>