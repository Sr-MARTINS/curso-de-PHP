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
            <a href="novoCadastro.php">Nova Cadrastro</a>
        </nav>
    </header>
    
    <table border="1">
        <tr>
            <td>id</td>
            <td>Categoria</td>
            <td>ativo</td>
            <td cospan="2">Opção</td>
        </tr>

        <?php 
                
            $sql = "SELECT * FROM categoria";
            $qry = mysqli_query($conexao, $sql);

            while ($linha = mysqli_fetch_array($qry)) {
        ?>
            <tr>    

                <td> <?= $linha["id_categoria"] ?>  </td>
                <td> <?php echo $linha["categoria"] ?> </td>
                <td> <?php echo $linha["atv_categoria"] ?> </td>

                <td> <a href="editar.php" id="<?php $linha["id_categoria"] ?>"> Editar</td>
                <td> <a href="#" id="<?php $linha["id_categoria"] ?>"> Excluir</td>
                
            </tr>
        
        <?php } ?>
    </table>

    
</body>
</html>