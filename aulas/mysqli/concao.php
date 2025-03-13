<?php

    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $banco = "curso_mysqli";

    $conexao = mysqli_connect($servidor, $user, $pass, $banco) or die ("Não foi possivel fazer a conexão com o banco de dados");

    $qryInsert = "INSERT INTO cliente(cliente, email, fone, endereco) VALUE('raimundo', 'raimundo@gmail.com', '99-777777777', 'rua 9')";

    $qryUpdate = "UPDATE cliente set endereco = 'Bairro de Lurdes' WHILE id_cliente = 2";
    $qryDelete = "DELETE FROM `cliente` WHERE id_cliente = 2";
    
    $qry = "SELECT * FROM cliente";
    
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
    // print_r($geral);
    
    // echo "mysqli_fetch_array - numerico";
    // print_r($numerico);

    // echo "mysqli_fetch_array - associativo";
    // print_r($associativo);
    
    // echo "mysqli_fetch_array - assoc";
    // print_r($assoc);
    // echo "Pegando elemento Assoc = " .$assoc ["cliente"] ."<br>";
    
    // echo "mysqli_fetch_array - row";
    // print_r($row);
    // echo "Pegando elemento Row = " .$row [1] ."<br>";
    
    // echo "mysqli_fetch_array - object";
    // print_r($obj);
    // echo "Pegando elemento do Object = " .$obj -> cliente ."<br>";
    
    
    // echo "<br>" ." mysqli_fetch_all";
    // print_r($todos);
    // echo "Pegando elemento do Fetch all = " .$todos[0] ["email"] ."<br>";
    
    
    // echo "<br>" ." mysqli_fetch_field";
    // print_r($campo);
    
    // echo "<br>" ." mysqli_fetch_fieldes";
    // print_r($campo);
    

        //test
/*
    $qryNovo = "INSERT INTO cliente(cliente, email, fone, endereco) VALUE('Costa', 'coita@gmail.com', '12-12131415', 'r 5')";
    $itemNovo = "INSERT INTO cliente(cliente, email, fone, endereco) VALUE('Chico', 'chico@gmail.com', '12-12222222', 'r 6')"; 
    $uppItem = "UPDATE cliente set cliente = 'Pedro' WHERE id_cliente = 36";
    $uppOne = "UPDATE cliente set endereco = 'rua Nova' WHERE id_cliente = 1";
    
    
    $resultado = mysqli_query($conexao, $uppOne);
    
    if($resultado) {
        echo "add";
    }else {
        echo "erro";
    };
*/
?>