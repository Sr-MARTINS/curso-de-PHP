<?php
    
    session_start();
    
    if($_POST["intName"]=="joao" && $_POST["intSenha"]=="123") {
        $_SESSION["cliente"] = "Martins";
        $_SESSION["login"] = "joao";

        header("Location:pg1.php");

    }else{
        // unset($_SESSION["cliente"]);
        // unset($_SESSION["login"]);

        session_destroy();

        header("Location:index.php");
    }

?>