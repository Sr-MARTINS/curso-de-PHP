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
                    // $id = $_GET["id"];

                    // if(isset($_POST["delt"])) {
                    //     delete("cliente", "id_cliente = $id") ;
                    //     header("Location:index.php?link=5");
                    // }
                    
                    // while($linha = mysqli_fetch_array($qyr)) {
                ?>
                    <tr>
                        <td><?php echo $linha["nome"]  ?></td>
                        <td><?php echo $linha["email"] ?></td>
                        <td><?php echo $linha["telefone"]  ?></td>
                        <td>
                            <form method="POST">
                                <input type="hidden" name="id_cliente" value="<?php echo $linha["id_cliente"] ?>">
                                <a>
                                   <input type="submit" name="delt" value="delete">
                               </a> 
                            </form>
                        </td>
                    </tr>  
                
                  
            </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>