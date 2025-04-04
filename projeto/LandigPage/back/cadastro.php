<?php
    require("../back/include/config.php");
    require("../back/include/crud.php");

    $nome       = $_POST["intName"];
    $email      = $_POST["intEmail"];
    $id_produto = $_POST["id_produto"];
    $data       = date("Y-m-d");

    $dados = array (
        "cliente"       => $nome,
        "email"         => $email,
        "data"          => $data,
    );

    if(($nome) && ($email)) {
        $cliente = consultar("cliente", "email = '$email'");  //verificar se ja esta cadastrado
        
        if(!$cliente) {

          $id_cliente = inserir("cliente", $dados, true);

        }else {
            $id_cliente = $cliente[0]["id_cliente"];
        }
    }else{
        echo "faltanto dados";
    }

        //AJUSTAR
    if($id_cliente){
        inserir("venda", array(
            "id_produto"  =>  $id_produto,
            "id_cliente"  =>  $id_cliente,
            "data_compra" =>  $data,
            "pago"        =>  "N"
        ));

            //pagina de pagamento
        header("Location: pgPag.php");
    }else {
        header("Location:" .URL_BASE);
    }
