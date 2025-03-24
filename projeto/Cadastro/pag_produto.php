<!DOCTYPE html>

<?php
    require("conexao.php");
    
    if(isset($_GET["ordem"])) {
        $ordem = $_GET["ordem"];
    }else {
        $ordem = 0;
    }

    $pesq = mysqli_query($conexao, "SELECT id_produto FROM produto");
    $total = mysqli_num_rows($pesq);

    $lpp = 2 ; //linha por pg
    $paginas = ceil($total / $lpp - 1);  //Determina o total de pg
    $paginas_mostradas = ceil($total /$lpp); //Determina o total de pg mostrada

    $ordem_mostradas = $ordem + 1;
    $inicio = $ordem * $lpp;
    
    if($ordem == 0) {
        $mais = $ordem + 1;
        $url_mais = "pag_produto.php?ordem=$mais";
        $paginacao = "Pagina $mais de $paginas_mostradas <br>
                    <a href='$url_mais'> Proxima </a> | <a href='pag_produto.php?ordem=$paginas'> Última </a> ";   
    }
    if($ordem > 0) {
        $mais = $ordem + 1;
        $url_mais = "pag_produto.php?ordem=$mais";

        $menos = $ordem - 1;
        $url_menos = "pag_produto.php?ordem=$menos";

        $paginacao = "Pagina $ordem_mostradas de $paginas_mostradas <br>
                     <a href='pag_produto.php?ordem=0'> Primeira </a> | 
                     <a href='$url_menos'> Anterior </a>  | 
                     <a href='$url_mais'> Proxima </a> |
                     <a href='pag_produto.php?ordem=$paginas'> Ultima </a> " ;
    }
    if($ordem == $paginas) {
        $menos = $ordem - 1;
        $url_menos = "pag_produto.php?ordem=$menos";

        $paginacao = "Pagina $ordem_mostradas de $paginas_mostradas <br>
                    <a href='pag_produto.php?ordem=0'> Primeira </a> |
                    <a href='$url_menos'> Anterios </a> ";
    }
    if($paginas <= 0) {
        $paginacao = "Pagina 1 de 1";   
    }

?>

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

                <?php 
                        
                        $sql = "SELECT * FROM produto p, categoria  c WHERE p.id_categoria = c.id_categoria ORDER BY id_produto LIMIT $inicio, $lpp";
                        $qry = mysqli_query($conexao, $sql);

                    while ($linha = mysqli_fetch_array($qry)) {
                ?>
                    <tr>    
                        
                        <td> <?php echo $linha["id_produto"] ?>  </td>
                        <td> <?php echo $linha["categoria"] ?> </td>
                        <td> <?php echo $linha["produto"] ?> </td>
                        <td> <?php echo $linha["preco"] ?> </td>
                        <td> <?php echo $linha["ativo_produto"] ?> </td>

                        <td> <a href="editarProduto.php?id=<?php echo $linha["id_produto"] ?>"> Editar
                        / <a href="excluirProduto.php?id=<?php echo $linha["id_produto"] ?>"> Excluir</td>
                    
                        
                    </tr>
                
                <?php } ?>

            </table>

            <div>
                <?php echo $paginacao ?>
            </div>
        </div>

    </main>

    
</body>
</html>