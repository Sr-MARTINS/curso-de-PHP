<?php

    require("conexao.php"); 

    @$id_categoria = $_POST["pesq_id_categoria"];
    @$pesq_produto = $_POST["pesq_produto"];

    if(($id_categoria != "") && ($pesq_produto != "")) {
        @$where = "AND p.id_categoria = '$id_categoria' AND produto LIKE = '%$pesq_produto' ";
    }else if(($id_categoria != "")) {
        @$where = "AND p.id_categoria = '$id_categoria' ";
    }else if(($pesq_produto != "")) {
        @$where = "AND produto LIKE '%$pesq_produto' ";
    }else {
        @$where = "Nenhum";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="novoProduto.php">Nova Cadrastro</a>
        </nav>
    </header>

    
<div style="margin: 10px">
        <form method="POST" >
            <label for="pelaCategoria">Pela categoria</label> <br>
            <select name="pesq_id_categoria" >
                <option value="">Selecione uma categoria</option>

                <?php 
                    $sql = "SELECT * FROM categoria";
                    $qry = mysqli_query($conexao, $sql);

                    while($linha = mysqli_fetch_array($qry)) {
                        if($linha["id_categoria"] == $id_categoria)
                            $selecao = "selected";
                        else 
                            $selecao = "";

                        echo '<option value="' .$linha['id_categoria'] .'"> ' . $linha['categoria'] .' </option>';
                    }
                ?>
            </select>
            
            <label for="peloProduto">Pelo Produto </label> 
            <input name="pesq_produto" value="<?php $linha["pesq_produto"]  ?>">

            <input type="submit" value="Pesquisado">
        </form>
    </div>
    
    <table border="1">
        <tr>
            <td>id</td>
            <td>Categoria</td>
            <td>Produto</td>
            <td>Preço</td>
            <td>Ativo</td>
            <td cospan="2">Opção</td>
        </tr>

        <?php 
                
                $sql = "SELECT * FROM produto p, categoria  c WHERE p.id_categoria = c.id_categoria $where";
                $qry = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($qry)) {
        ?>
            <tr>    
                
                <td> <?php echo $linha["id_produto"] ?>  </td>
                <td> <?php echo $linha["categoria"] ?> </td>
                <td> <?php echo $linha["produto"] ?> </td>
                <td> <?php echo $linha["preco"] ?> </td>
                <td> <?php echo $linha["ativo_produto"] ?> </td>

                <td> <a href="editarProduto.php?id=<?php echo $linha["id_produto"] ?>"> Editar</td>
                <td> <a href="excluirProduto.php?id=<?php echo $linha["id_produto"] ?>"> Excluir</td>
            
                
            </tr>
        
        <?php } ?>

    </table>

    
</body>
</html>