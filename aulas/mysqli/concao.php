<?php

    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "curso_mysqli";

    $conexao = mysqli_connect($servidor, $user, $pass, $banco) or die ("Não foi possivel fazer a conexão com o banco de dados");

    $qry = "INSERT INTO cliente(cliente, email, fone, endereco) VALUE('raimundo', 'raimundo@gmail.com', '99-777777777', 'rua 9')";

    // $bat = "INSERT INTO cliente(cliente, email, fone, endereco) VALUE('Joao', 'joaozinho@gmail.com', '98-985102699', 'B 10')";

    $resultado = mysqli_query($conexao, $qry);

    if($resultado) {
        echo "Operação realizada";
    }else {
        echo "Não foi possivel  reaizar operação";
    };  

?>