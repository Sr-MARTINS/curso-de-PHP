<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/editar.css">
</head>
<body>
    <h2 style="margin: .5rem 2rem;">Delete</h2>

    <div id="caixa">
        <div id="boxTable">
            <table class="table table-striped text-align-center">
            <thead>
                <?php

                    $dados = file("cliente.txt");
                    $quant = count($dados);
                    @$id = $_GET["id"];

                    if($quant != 0) {
                ?>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Alterar</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    for($i = 0; $i < $quant; $i++) {
                        $linha = explode("\t", $dados[$i]);
                ?>
                    <tr>
                        <td><?php echo $linha[1] ?></td>
                        <td><?php echo $linha[2] ?></td>
                        <td><?php echo $linha[3] ?></td>
                        <td>
                            <a href="index.php?link=2&acao=Excluir&id=<?php echo $linha[0] ?>">Excluir</a>
                        </td>
                    </tr>

                <?php } }  ?>

            </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>