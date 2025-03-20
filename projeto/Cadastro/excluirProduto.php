<?php
    
    require ("conexao.php");

    if(isset($_POST["deletar"])) {
        
        var_dump($_POST["deletar"]);

        $id_produto = $_POST["id_produto"];

        $sql = "DELETE FROM produto WHERE id_produto = '$id_produto' ";
        $qry = mysqli_query($conexao, $sql);

        if($qry) {
            header("Location:listaProduto.php");
        }else {
            echo "Não foi possivel Excluir o elemento " ."Erro apresentado" .mysqli_error($conexao);
        }

    }
    
    else if (isset($_GET["id"])) {
        $sql = "SELECT * FROM produto WHERE id_produto =" .$_GET["id"];
        $qry = mysqli_query($conexao, $sql);
        $linha = mysqli_fetch_array($qry);

        $id_produto =    $linha["id_produto"];
        $id_categoria =  $linha["id_categoria"];
        $produto =       $linha["produto"];
        $preco =         $linha["preco"];
        $descricao =     $linha["descricao"];
        $ativo_produto = $linha["ativo_produto"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir produto</title>
</head>
<body>
    <header>
        <nav>
            <a href="listaProduto.php">Voltar para Lista de Categoria</a>
        </nav>
    </header>
        <h2>EXCLUIR ITEM</h2>
        <P>voce realmente deseja excluir o item?</P>
    
        <table border="1">
            <tr>
                <td>id</td>
                <td>Categoria</td>
                <td>Produto</td>
                <td>Preço</td>
                <td>Descrição</td>
                <td>Ativo_Produto</td>
            </tr>

            <tr>
                <td> <?php echo $linha["id_produto"] ?> </td>
                <td> <?php echo $linha["id_categoria"] ?> </td>
                <td> <?php echo $linha["produto"] ?> </td>
                <td> <?php echo $linha["preco"] ?> </td>
                <td> <?php echo $linha["descricao"] ?> </td>
                <td> <?php echo $linha["ativo_produto"] ?> </td> 
            </tr>

           
        </table> <br>

        <form method="POST" >
            <input type="hidden" name="id_produto" value="<?php echo $linha["id_produto"] ?>" >
            <input type="submit" name="deletar" value="Deletar">
        </form>
</body>
</html>

