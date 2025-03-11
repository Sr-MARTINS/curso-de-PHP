<?php

    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "curso_mysqli";

    $conexao = mysqli_connect($servidor, $user, $pass, $banco) or die ("Não foi possivel fazer a conexão com o banco de dados");

    $qry = "INSERT INTO cliente(cliente, email, fone, endereco) VALUE('raimundo', 'raimundo@gmail.com', '99-777777777', 'rua 9')";

    $qryUpdate = "UPDATE cliente set endereco = 'Bairro de Lurdes' WHILE id_clinete = 2";

    $qryDelete = "DELETE FROM `cliente` WHERE id_cliente = 2";

    $resultado = mysqli_query($conexao, $qryDelete);

    if($resultado) {
        echo "Excluido com sucesso";
    }else {
        echo "Não foi possivel  excluido ";
    }

?>