<?php // OK
    require ("crud.php");

    if(isset($_POST["btCadastro"])) {
        $id_categoria = $_POST["txt_id_categoria"];
        $produto =      $_POST["produto"];
        $preco =        $_POST["preco"];
        $descricao =    $_POST["descricao"];
        $ativo =        $_POST["ativo"];

        $dados = array (
            "id_categoria"   => "$id_categoria",
            "produto"        => "$produto",
            "preco"          => "$preco",
            "descricao"      => "$descricao",
            "ativo_produto"  => "$ativo",
        );

        $implimentacao = adicionar("produto", $dados);

        if($implimentacao) {
            header("Location:listaProduto.php");
        }else {
           echo "Erro de dados" .mysqli_error($conexao);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h2>Novo Produto</h2>
    <form method="POST">

        <label for="categoria">Categoria</label>
        <select name="txt_id_categoria">

            <option value="">Selecione uma opção</option>

            <?php 
                $sql = "SELECT * FROM categoria";
                $qry = executar($sql);
                
                while($linha = mysqli_fetch_array($qry)) {
                    echo '<option value="' .$linha['id_categoria'] .'"> ' .$linha['categoria'] .' </option>'; 
                }
            ?>

        </select>

        <br>

        <label for="produto">Produto</label>
        <input type="text" name="produto"> <br>

        <label for="preco">Preço</label>
        <input type="text" name="preco"> <br>

        <label for="ativo">Ativo</label>
        <input type="text" name="ativo"> <br>

        <label for="descricao">Descrição</label>
        <textarea  name="descricao"> </textarea><br>

        <input type="hidden" name="enviado" value="ok">
    
        <input type="submit" name="btCadastro" value="Enviar">
    </form>
    
</body>
</html>