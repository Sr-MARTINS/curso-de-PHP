<?php
    require ("conexao.php");

    if(isset($_POST["btCadastro"])) {
        
        $id_categoria = $_POST["id"];

        $sql = "DELETE  FROM categoria WHERE id_categoria = '$id_categoria' ";
        $qry = mysqli_query($conexao, $sql);

        if($qry) {
            header("Location:listaCategoria.php");
        }else {
            echo "Não foi possivel Excluir o elemento " ."Erro apresentado" .mysqli_error($conexao);
        }

    }

    else if (isset($_GET["id"])) {

        $sql =   "SELECT * FROM categoria WHERE id_categoria =" . $_GET["id"];
        $qry =   mysqli_query($conexao, $sql);
        $linha = mysqli_fetch_array($qry);

        $id_categoria =  $linha["id_categoria"];
        $categoria =     $linha["categoria"];
        $atv_categoria = $linha["atv_categoria"]; 
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

    <form method="POST" action="">
        <label for="categoria">Categoria</label>
        <input type="text" name="intNovoItem" value="<?= $categoria ?>" >

        <label for="ativo">Ativo</label>
        <input type="text" name="valorItem" value="<?= $atv_categoria ?>" >

        <input type="hidden" name="id" value="<?= $id_categoria ?>" > 
        <input type="hidden" name="enviado" value="ok"> 
        
        <input type="submit"  name="btCadastro" value="Excluir">
    </form>  
</body>
</html>