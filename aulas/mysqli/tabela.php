<?php

    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "curso_mysqli";

    $conexao = mysqli_connect($servidor, $user, $pass, $banco) or die ("Não foi possivel fazer a conexão com o banco de dados");

    $sql = "SELECT * FROM cliente";
    $qry = mysqli_query($conexao, $sql);

    echo "
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
    }
?>