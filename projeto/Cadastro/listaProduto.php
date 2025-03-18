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
                
            $sql = "SELECT * FROM produto p, categoria c WHERE p.id_categoria = c.id_categoria";
            $qry = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($qry)) {
        ?>
            <tr>    
                <?= "oi" ?>
                <td> <?= $linha["id_produto"] ?>  </td>
                <td> <?= $linha["categoria"] ?> </td>
                <td> <?php echo $linha["produto"] ?> </td>
                <td> <?php echo $linha["preco"] ?> </td>
                <td> <?php echo $linha["ativo_produto"] ?> </td>

                <td> <a href="editarProduto.php?id=<?php echo $linha["id_produto"] ?>"> Editar</td>
                <td> <a href="excluirProduto.php?id=<?php echo $linha["id_produto"] ?>"> Excluir</td>
                
            </tr>
        
        <?php } ?>

            <tr>
                <td>Boa</td>
                <td>reddo</td>
                <td>ere</td>
                <td>ertcha</td>
                <td>ertcha</td>
                <td>ertcha</td>
            </tr>
    </table>

    
</body>
</html>