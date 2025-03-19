<?php

    require ("conexao.php");

    if(isset($_POST["btCadastro"])) {

        $id_produto =  $_POST["id_produto"];
        $id_categoria =  $_POST["txt_id_categoria"];
        $produto =       $_POST["produto"];
        $preco =         $_POST["preco"];
        $ativo =         $_POST["ativo"];
        $descricao =     $_POST["descricao"];

        $sql = "UPDATE produto SET id_categoria = '$id_categoria' , produto = '$produto' , preco = '$preco', ativo_produto = '$ativo', descricao = '$descricao' WHERE id_produto = $id_produto";
        $qry = mysqli_query($conexao, $sql);

        if($qry) {
            header("Location:listaProduto.php");
        }else {
            echo "Erro no editar" .mysqli_error($conexao);
        }
    }
    else if (isset($_GET["id"])) {

        $sql = "SELECT * FROM produto WHERE id_produto =" .$_GET["id"];
        $qry = mysqli_query($conexao, $sql);
        $linha = mysqli_fetch_array($qry);

        $id_produto = $linha["id_produto"];
        $id_categoria = $linha["id_categoria"];
        $produto = $linha["produto"];
        $preco = $linha["preco"];
        $ativo = $linha["ativo_produto"];
        $descricao = $linha["descricao"];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <form method="POST">
        <label for="categoria">Categoria</label>
        <select name="txt_id_categoria">
            <option value="">Selecione uma opção</option>
           <?php
           
                $sql = "SELECT * FROM categoria";
                $qry = mysqli_query($conexao, $sql);

                // while($linha = mysqli_fetch_array($qry)) {
                //     if($linha['id_categoria'] === $id_categoria) {
                //         $selecao = "selected";
                //     }else {
                //         $selecao = "";
                //         echo '<option value="' .$linha['id_categoria']  .$selecao .'"> ' .$linha['categoria'] .' </option>';
                //     } 
                // }

                while ($linha = mysqli_fetch_array($qry)) {
                    $selecao = ($linha['id_categoria'] == $id_categoria) ? "selected" : "";
                    echo '<option value="' . $linha['id_categoria'] . '" ' . $selecao . '>' . $linha['categoria'] . '</option>';
                }
            ?> 

        </select>
        <br>

        <label for="produto">Produto</label>
        <input type="text" name="produto" value="<?php echo $produto ?>" > <br> 

        <label for="preco">Preço</label>
        <input type="text" name="preco" value="<?php echo $preco ?>" > <br>

        <label for="ativo">Ativo</label>
        <input type="text" name="ativo" value="<?php echo $ativo ?>" > <br>

        <label for="descricao">Descrição</label>
        <textarea name="descricao" value="<?php echo $descricao ?>"></textarea>

        <input type="hidden" name="id_produto" value="<?php echo $id_produto ?>">
        <input type="hidden" name="enviado" value="ok">

        <input type="submit" name="btCadastro"  value="Editar">

    </form>
    
</body>
</html>