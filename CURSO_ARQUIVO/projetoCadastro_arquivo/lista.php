<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/editar.css">
</head>
<body>
    <div style="display: flex; align-items: center; justify-content: space-between;">
        <div >
        <h2 style="margin: .5rem 2rem 0 2rem;">Lista</h2>
        </div>
    
    <div id="novoItem">
           <a href="index.php?link=2">
                <button class="btn btn-success"> Novo Cadastro </button>
           </a>
    </div>
    </div>
    <hr>

    <div id="caixa">
        <div id="boxTable">
            <?php 
                $dados = file("cliente.txt");
                $quant = count($dados);

                if($quant != 0) {
            ?>
            <table class="table table-striped text-align-center">
            <thead>
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
                    <a href="index.php?link=2&acao=Editar&id=<?php echo $linha[0] ?>">Editar</a> / 
                    <a href="index.php?link=4&acao=Excluir&id=<?php echo $linha[0] ?>">Excluir</a></td>
                </tr>

                <?php } ?>
            </tbody>
            </table>

            <?php 
                }else {
                    echo "Não existe nenhum registro <br><a href=index.php?link=2>Criar item </a>";
                }
            ?>
        </div>
    </div>
    
</body>
</html>