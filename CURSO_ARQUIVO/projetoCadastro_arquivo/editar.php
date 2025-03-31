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
    <h2 style="margin: .5rem 2rem 0 2rem;">Editar</h2>
    </div>
    
    <div id="novoItem">
           <a href="#">
                <button class="btn btn-success"> Novo Cadastro </button>
           </a>
    </div>
    </div>
    <hr>

    <div id="caixa">
        <div id="boxTable">
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
                    // require_once("crud.php");

                    // $qyr = consultarTabela("cliente");
                    // while($cliente = mysqli_fetch_array($qyr)) {

                ?>
                <tr>
                    <td><?php echo $cliente["id_cliente"]    ?> </td>
                    <td><?php echo $cliente["nome"]    ?> </td>
                    <td><?php echo $cliente["email"]   ?> </td>
                    <td><?php echo $cliente["telefone"]?> </td>
                    <td><a href="index.php?link=2&acao=Editar&id=<?php echo $cliente["id_cliente"] ?>">Editar</a>
                    </td>
                </tr>
                     
            </tbody>
            </table>
        </div>
        
    </div>
    
</body>
</html>