<?php
    
    require ("conexao.php");

    if(isset($_POST["deletar"])) {
        
        $id_produto = $_POST["id"];

        $sql = "DELETE  FROM produto WHERE id_produto = '$id_produto' ";
        $qry = mysqli_query($conexao, $sql);

        if($qry) {
            header("Location:listaCategoria.php");
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
                <td>Ativo</td>
                <td>Opções</td>
            </tr>

            <?php 
                $sql = "SELECT FROM produto";
                $qry = mysqli_query($conexao, $sql);

                while($linha = mysqli_fetch_array($qry)) {

            ?>
          
            <tr>
                <td value="<?php echo $linha["id_produto"] ?>"></td>
                <td value="<?php echo $linha["id_categoria"] ?>" ></td>
                <td value="<?php echo $linha["produto"] ?>" ></td>
                <td value="<?php echo $linha["preco"] ?>" ></td>
                <td value="<?php echo $linha["descricao"] ?>" ></td>
                <td value="<?php echo $linha["ativo_produto"] ?>" ></td> 
            </tr>

            <?php } ?>
        </table>

        <input type="submit" name="deletar" value="Deletar">
</body>
</html>

