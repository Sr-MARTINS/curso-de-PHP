<?php
    require ("conexao.php");

    if(isset( $_POST["btCadastro"] )) {
        
        $novoItem = $_POST["intNovoItem"];
        $ativo = $_POST["valorItem"];

        $sql = "INSERT INTO categoria (categoria, atv_categoria) VALUE ('$novoItem', '$ativo')";
        $qry = mysqli_query($conexao, $sql);

        if($qry) {
            header("Location:listaCategoria.php");
        }else {
            echo "Erro: " .mysqli_error($conexao);
        }

    }


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Novo Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    

</head>
<body>
    <div class="d-flex justify-content-center  flex-column text-center">
        <h1>Novo cadastro</h1>
        <form method="POST" style="margin-top:1rem;" class="d-flex align-items-center justify-content-center flex-column">
            <label for="categoria">Categoria</label>
            <input type="text" name="intNovoItem" >

            <label for="ativo">Ativo</label>
            <input type="text" name="valorItem">

            <input type="hidden" name="enviado" value="ok">
            <input type="submit" name="btCadastro" value="Cadastro">
        </form> 
    </div>
</body>
</html>