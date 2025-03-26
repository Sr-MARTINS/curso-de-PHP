<?php
    require("config.php");

    // function abrirConexao() {        
    //     $conexao = mysqli_connect(SERVIDOR, USER, PASSWORD, DB) or die (myslqi_connect_error);
    //     mysqli_set_charset($conexao, CHARSET);

    //     return $conexao;
    // }

    // function adicionar($tabela, array $dados) {
    //     $campos = implode("," , array_keys($dados) );
    //     $valores = "'". implode("', ' ", $dados) ."'";

    //     $sql = "INSERT INTO $tabela ({$campos}) VALUE ({$valores})";

    //     return executar($sql);
    // }

    // function atualizar($tabela, array $dados, $condicao){
    //     foreach ( $dados AS $chave => $valores) {
    //         $campos[] = "{$chave} = '{$valores}' ";
    //     }
    //     $campos = implode (", ", $campos);
    //     $sql = "UPDATE {$tabela} SET {$campos} WHERE {$condicao}";

    //     return executar($sql);
    // }

    // function deletar($tabela, $condicao) {
    //     $sql = "DELETE FROM $tabela WHERE $condicao";

    //     return executar($sql);
    // }

    function abrirConexao() {
        $conexao = mysqli_connect(SERVIDOR, USER, PASSWORD, DB);
        mysqli_set_charset($conexao, CHARSET);

        return $conexao;
    }

    function fecharConexao($conexao) {
        @mysqli_close($conexao) or die (mysqli_error($conexao));

        return $conexao;
    }

    function executar($sql) {
        $conexao = abrirConexao();

        $qry = @mysqli_query($conexao, $sql) or die (mysqli_error($conexao));

        fecharConexao($conexao);
        return $qry;
    }

    // função de consulta ($tabela, $condicao = null, $campos = "*")
        // $tabela - nome da tabelo - passado no elemento da variavel "index"
        // $condicao = null - "valor opsional" q representa o WHERE
        // $campos = " * " - as colunas q irão ser exebida, o "*" esta falando q vai ser todas colunas

    function consulta($tabela, $condicao = null, $campos = "*") {
        $sql = "SELECT $campos FROM $tabela $condicao";
        $qry = executar( $sql);

        if(!mysqli_num_rows($qry)) {
            return false;
        }else { 
            while($linha = mysqli_fetch_array($qry)) {
                $dados[] = $linha;
            }
            return $dados;
        }

    } 

    function adicionar($tabela, array $dados) {
        $campos = implode(",", array_keys($dados));
        $valores = "'" .implode("' ,'", $dados) ."'";

        $sql = "INSERT INTO $tabela ({$campos}) VALUES ({$valores})";
       
        return executar($sql);

    }

?>