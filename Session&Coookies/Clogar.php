<?php
    session_start();

    if($_POST["txt_nome"] == "joao" && $_POST["txt_senha"] = "123") {

        setcookie("cliente", "Martins", time() + (24 * 3600));
        setcookie("login", "joao");

        header("Location:Cpg.php");
    }else{
        session_destroy();
        setcookie("cliente");

        header("Location:cooks.php");
    }

?>