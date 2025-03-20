<!DOCTYPE html>
<?php  require("conexao.php"); ?>

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
                        echo '<option value="' .$linha['id_categoria'] .'"> ' . $linha['categoria'] .' </option>';
                    }
                ?>
            </select>
            
            <label for="peloProduto">Pelo Produto </label> 
            <select name="pesq_produto">
                <option value="">Selecione um Produto </option>

                <?php 
                    $sql = "SELECT * FROM produto";
                    $qry = mysqli_query($conexao, $sql);

                    while($linha = mysqli_fetch_array($qry)) {
                        echo '<option value="' .$linha['id_produto'] .'"> ' . $linha['produto'] .' </option>';
                    }
                ?>
            </select>

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
                
                $sql = "SELECT * FROM produto p, categoria  c WHERE p.id_categoria = c.id_categoria ";
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