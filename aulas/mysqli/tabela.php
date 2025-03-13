<?php

    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "curso_mysqli";

    $conexao = @mysqli_connect($servidor, $user, $pass, $banco);

    // $sql = "SELECT * FROM cliente";
    // $qry = mysqli_query($conexao, $sql);

    /*echo "
            <table border=1>
                <tr>
                    <td> Nome </td>
                    <td> Email </td>
                </tr> ";

    while($linha = mysqli_fetch_array($qry)) {
        echo    "<tr> 
                    <td>" .$linha["cliente"] ."</td>  
                    <td>" .$linha["email"] ."</td> 
                </tr>";
            "</table>";
    };*/

    //mysqli_num_rows($qry)
    // echo "Todos os registros: " .mysqli_num_rows($qry);
    // $linha = mysqli_fetch_row($qry);

        //contando carcteres dos campos
    // foreach(mysqli_fetch_field($qry) as $chave => $valor) {
    //     $campo = mysqli_fetch_field_direct($qry, $chave);
    //     echo "O campo tem " .$campo -> name ."tem " .$valor ."caracteres <br>";
    // }

        // myqli_affected_rows - retorna o numero de item atualizado
    $itemUp = "UPDATE cliente set endereco = 'rua 23' WHERE endereco = 0 ";

    $qry = mysqli_query($conexao, $itemUp);
    // echo "Foram atualizados " . mysqli_affected_rows($conexao);

    // ERROS
        //mysqli_connect_errno - retorna o codigo do erro
        // echo "Numero de erros numero: " .mysqli_connect_errno() ."<br>";

        //mysqli_connect_error - retorna em string o erro
        // echo "Numero de erros numero:  " .mysqli_connect_error();

        //mysqli_error - mensagem se erro
        // echo "Numero de erros numero:  " .mysqli_error();

?>