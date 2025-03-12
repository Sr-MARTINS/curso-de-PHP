<?php

    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "curso_mysqli";

    $conexao = mysqli_connect($servidor, $user, $pass, $banco) or die ("Não foi possivel fazer a conexão com o banco de dados");

    $qryInsert = "INSERT INTO cliente(cliente, email, fone, endereco) VALUE('raimundo', 'raimundo@gmail.com', '99-777777777', 'rua 9')";

    $qryUpdate = "UPDATE cliente set endereco = 'Bairro de Lurdes' WHILE id_clinete = 2";
    $qryDelete = "DELETE FROM `cliente` WHERE id_cliente = 2";
    
    $qry = "SELECT * FROM cliente";

    // $resultado = mysqli_query($conexao, $qry);
    
    $geral = mysqli_fetch_array( mysqli_query($conexao, $qry));

    $associativo = mysqli_fetch_array(mysqli_query($conexao, $qry), MYSQLI_ASSOC);
    $numerico = mysqli_fetch_array(mysqli_query($conexao, $qry), MYSQLI_NUM);

        //mysqli_fetch_assoc - mysqli_fetch_row - mysqli_fetch_object
    $assoc = mysqli_fetch_assoc(mysqli_query($conexao, $qry));
    $row = mysqli_fetch_row(mysqli_query($conexao, $qry));
    $obj = mysqli_fetch_object(mysqli_query($conexao, $qry));

        //mysqli_fetch_all
    $todos = mysqli_fetch_all(mysqli_query($conexao, $qry), MYSQLI_BOTH);

        //mysqli_fetch_field - mysqli_fetch_fieldes - mysqli_fetch_direct
    $campo = mysqli_fetch_field(mysqli_query($conexao, $qry));
    $campos = mysqli_fetch_field(mysqli_query($conexao, $qry));

    // echo "mysqli_fetch_array - geral";
    // echo "<pre>";
    // print_r($geral);
    // echo "</pre>";

    // echo "<hr>";

    // echo "mysqli_fetch_array - numerico";
    // echo "<pre>";
    // print_r($numerico);
    // echo "</pre>";

    // echo "<hr>";

    // echo "mysqli_fetch_array - associativo";
    // echo "<pre>";
    // print_r($associativo);
    // echo "</pre>";

    // echo "<hr>";

    // echo "mysqli_fetch_array - assoc";
    // echo "<pre>";
    // print_r($assoc);
    // echo "</pre>";

    // echo "<hr>";

    // echo "mysqli_fetch_array - row";
    // echo "<pre>";
    // print_r($row);
    // echo "</pre>";

    // echo "<hr>";

    // echo "mysqli_fetch_array - object";
    // echo "<pre>";
    // print_r($obj);
    // echo "</pre>";

    // echo "<hr>";

    echo "Pegando elemento Assoc = " .$assoc ["cliente"] ."<br>";
    echo "Pegando elemento Row = " .$row [1] ."<br>";
    echo "Pegando elemento do Object = " .$obj -> cliente ."<br>";

    echo "<br>" ." mysqli_fetch_all";
    echo "<pre>";
    print_r($todos);
    echo "</pre>" ."<br>";

    echo "Pegando elemento do Fetch all = " .$todos[0] ["email"] ."<br>";

    echo "<br>" ." mysqli_fetch_field";
    echo "<pre>";
    print_r($campo);
    echo "</pre>" ."<br>";

    echo "<br>" ." mysqli_fetch_fieldes";
    echo "<pre>";
    print_r($campos);
    echo "</pre>" ."<br>";
?>