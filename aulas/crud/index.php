<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <?php
        require("crud.php");

        $conexao = abrirConexao();

            //EXECUTAR
        // $sql = "INSERT INTO categoria (categoria, atv_categoria) VALUE ('Fruta', 'F')";
        // $qyr = executar($sql);

        // var_dump($qyr)

        //CONSULTA
        // $dados = consulta("produto");
        // echo "<pre>";
        // print_r($dados);
        // echo "<pre>";

        //ADICIONAR

        $dados = array(
            "categoria"     => "UVA",
            "atv_categoria"   => "M"
        );

        $adicionar = adicionar("categoria", $dados);
        var_dump($adicionar);

       /* $sql = "INSERT INTO categoria (categoria, atv_categoria) VALUE ('Markting', 'S')" ;
        $qyr = mysqli_query($conexao, $sql);

        $qyr = executar($sql);
       
        $dados = consultar("produto");

        echo "<pre>";
        print_r($dados);
        echo "<pre>";

            INSERIR 
        $dados = array(
            "categoria"      => "Fruta",
            "atv_categoria"  => "N"
        );


        $insere = adicionar("categoria", $dados);
        var_dump($insere);

            ATUALIZAR
        $dados = array(
            "categoria" => "Concurso",
            "atv_categoria" => "N"
        );

        $altera = atualizar("categoria", $dados, "id_categoria = '3' ");
        var_dump($altera)

            DELETAR
        
        $delete = deletar("categoria", "id_categoria = '19' ");
        var_dump($delete); */
    ?>
    
</body>
</html>