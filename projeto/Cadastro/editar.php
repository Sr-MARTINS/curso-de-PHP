<?php
    require ("crud.php");
    
    if(isset( $_POST["btCadastro"] )) {
        
        $id_categoria = $_POST["id"];
        $categoria    = $_POST["intNovoItem"];
        $ativo        = $_POST["valorItem"];

        $dados = array (
            "id_categoria"  => "$id_categoria",
            "categoria"     => "$categoria",
            "atv_categoria" => "$ativo"
        );

        $upp = atualizar("categoria", $dados, "id_categoria = $id_categoria");

        if($upp) {
            header("Location:listaCategoria.php");
        }else {
            echo "Erro: " .mysqli_error($upp);
        }

    }
    else if (isset($_GET["id"])) {
        // $id = $_GET["id"];
        
        // $consult = consulta("categoria", "id_categoria = " .$_GET["id"]);
        // $qry = executar($consult);
        
        $sql = "SELECT * FROM categoria WHERE id_categoria = " .$_GET["id"];
        $qry = executar($sql);
        $linha = @mysqli_fetch_array($qry);

        $id_categoria = $linha["id_categoria"];
        $categoria    = $linha["categoria"];
        $ativo        = $linha["atv_categoria"];

    }


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Novo Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <header>
        <nav>
            <a href="listaCategoria.php"></a>
        </nav>
    </header>

    <form method="POST">
        <label for="categoria">Categoria</label>
        <input type="text" name="intNovoItem" value="<?= $categoria ?>">

        <label for="ativo">Ativo</label>
        <input type="text" name="valorItem" value="<?= $ativo?> ">

        <input type="hidden" name="id" value="<?= $id_categoria  ?>"> 

        <input type="hidden" name="enviado" value="ok"> 
        <input type="submit" name="btCadastro" value="Editar">
    </form>  
</body>
</html>