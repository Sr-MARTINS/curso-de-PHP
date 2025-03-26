<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
   
    <header  class="d-flex justify-content-around" style="margin: 1rem 2rem">

        <h1>Lista de Produto</h1>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">

            <button type="submit" class="btn btn-info" style="margin-right:10px">
                <a style="color:#000" class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                href="index.php">Home</a>
            </button>

            <button type="submit" class="btn btn-info">
                <a style="color:#000" class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                href="novoProduto.php">Nova Cadrastro</a>
            </button>
        </nav>
    </header>
    
    <main>    
        
        <div class="container text-center" style="margin-top: 1rem">
            
            <table border="1" class="table table-success table-striped-columns">
                <tr>
                    <td>id</td>
                    <td>Categoria</td>
                    <td>Produto</td>
                    <td>Preço</td>
                    <td>Ativo</td>
                    <td cospan="2">Opção</td>
                </tr>

                    <!-- "Ok "-->
                <?php 
                        require("crud.php");
                        $conexao = abrirConexao();
                        
                        $sql = "SELECT * FROM produto p, categoria  c WHERE p.id_categoria = c.id_categoria ";
                        $qry = executar($sql);

                    while ($linha = mysqli_fetch_array($qry)) {
                ?>
                    <tr>    
                        
                        <td> <?= $linha["id_produto"] ?>  </td>
                        <td> <?= $linha["categoria"] ?> </td>
                        <td> <?= $linha["produto"] ?> </td>
                        <td> <?= $linha["preco"] ?> </td>
                        <td> <?= $linha["ativo_produto"] ?> </td>

                        <td> <a href="editarProduto.php?id=<?php echo $linha["id_produto"] ?>"> Editar
                        / <a href="excluirProduto.php?id=<?php echo $linha["id_produto"] ?>"> Excluir</td>
                    
                        
                    </tr>
                
                <?php } ?>

            </table>
        </div>

    </main>

    
</body>
</html>