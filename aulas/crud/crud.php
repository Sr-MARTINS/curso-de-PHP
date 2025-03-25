<?php
    require("config.php");

    function abrirConexao() {        
        $conexao = mysqli_connect(SERVIDOR, USER, PASSWORD, DB) or die (myslqi_connect_error);
        mysqli_set_charset($conexao, CHARSET);

        return $conexao;
    }

    function closeConexao($conexao) {
        @mysqli_close($conexao) or die (mysqli_error($conexao));
    }

    function executar($sql) {
        $conexao = abrirConexao();
        $qyr = mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
   
        closeConexao($conexao);
        return $qyr;
    }

    function consultar($tabela, $condicao = null, $campos = "*" ) {
        $sql = "SELECT {$campos} FROM {$tabela} {$condicao}";
        $qyr = executar($sql);

        if(!mysqli_fetch_array($qyr)) {
            return false;
        }else {
            while($linha = mysqli_fetch_array($qyr)) {
                $dados[] = $linha; 
            }
            return $dados;
        }
    }

    function adicionar($tabela, array $dados) {
        $campos = implode("," , array_keys($dados) );
        $valores = "'". implode("', ' ", $dados) ."'";

        $sql = "INSERT INTO $tabela ({$campos}) VALUE ({$valores})";

        return executar($sql);
    }

    function atualizar($tabela, array $dados, $condicao){
        foreach ( $dados AS $chave => $valores) {
            $campos[] = "{$chave} = '{$valores}' ";
        }
        $campos = implode (", ", $campos);
        $sql = "UPDATE {$tabela} SET {$campos} WHERE {$condicao}";

        return executar($sql);
    }

    function deletar($tabela, $condicao) {
        $sql = "DELETE FROM $tabela WHERE $condicao";

        return executar($sql);
    }

    

?>