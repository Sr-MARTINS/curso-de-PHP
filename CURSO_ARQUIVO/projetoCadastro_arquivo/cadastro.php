<?php

    @$id = $_GET["id"];
    @$acao = $_GET["acao"];

    if($id != ""){
        $arquivo = file("cliente.txt");
        $linha = 0;
        foreach($arquivo as $dados) {
            list($codigo, $nome, $email, $telefone) = explode("\t", $dados);
            if($codigo == $id) {
                // echo $nome;
                break;
            }
            $linha++ ;
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/novoCadastro.css">
</head>
<body>
    <h2 style="margin:10px 0 0 20px">Fromulario de cadastro </h2>
    <hr>

    <div id="envep">
    <form action="opCadastro.php" method="POST">
        <div id="boxForm">            
                <label for="nome">Nome</label>
                <input type="text" name="nome" value="<?= isset($nome) ? $nome : "" ?>">
                
                <label for="email">Email</label>
                <input type="text" name="email" value="<?= isset($email) ? $email : "" ?>">
                
                <label for="email">Telefone</label> 
                <input type="text" name="telefone" value="<?= isset($telefone) ? $telefone : "" ?>">
        </div> 
        <div id="buttns">

            <input type="hidden" name="acao" value="<?= isset($acao)?$acao:"Cadastrar"; ?>">
            <input type="hidden" name="linha" value="<?= $linha ?>">
            <input type="hidden" name="id" value="<?= $id ?>">

            <input type="submit" class="btn btn-success" value="<?= isset($acao) ? $acao : "Cadastrar"; ?>" >

        </div>
    </form>
    </div>
    
</body>
</html>