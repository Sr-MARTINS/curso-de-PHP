<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link rel="stylesheet" href="cliente.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body >
    <div style="width:1000px; height:575px ; padding-top:1rem ; margin:2rem auto; border:1px solid #a8a6a6">
        <h3 style="margin:auto; padding-bottom:10px; text-align:center; border-bottom: 1px solid #a8a6a6; width:80%;">
            Lista de Clientes
        </h3>

        <div style="margin-top:10px;">
            <nav class="navbar bg-body" style="backgrond-color:grey; border-bottom: 1px solid #a8a6a6; padding: 1.3rem 10px ; ">
            <div class="container-fluid">
                <a style="font-size:1.7rem ;"class="navbar-brand">Clientes</a>

                <form action="opcliente.php" method="GET" class="d-flex" role="search">
                    
                    <input type="text" name="busca"  class="form-control me-2"  placeholder="Search" >
                    <input type="hidden" name="link" value="2" >

                    <button type="submit" name="submit"  class="btn btn-outline-success" >
                        Search
                    </button>
                </form>

            </div>
            </nav>
        </div>

        <div style="padding:20px ; height: 300px">
            <div style="margin:3px 0 12px 0">
                <button class="btn btn-success" >
                    <a  href="areaAdm.php?link=6" style="color: #fff">Cadastrar Cliente</a>
                    
                </button>
            </div>
            <div style="padding:20px 20px 20px 30px; border:1px solid #a8a6a6; border-radius: .5rem; height:300px; overflow-y: scroll;">
                <table class="table" >
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Endereço</th>
                        <th>Telefone</th>
                        <th style="padding-left:25px">Ação</th>
                    </tr>

                    <?php

                        $clientes = consultar("cliente");
                        // var_dump($clientes);
                        foreach($clientes as $cliente) {

                    ?>

                    <tr style="text-aling:center">
                        <th><?= $cliente["id_cliente"] ?> </th>
                        <td><?= $cliente["cliente"] ?> </td>
                        <td><?= $cliente["email"] ?> </td>
                        <td><?= $cliente["endereco"] ?> </td>
                        <td><?= $cliente["fone"] ?> </td>
                        
                        <td style="display:flex; aling-item:center">
                            <a href="areaAdm.php?link=6&acao=Editar&id=<?= $cliente["id_cliente"] ?>"><i class="bi bi-pencil-square"></i></a>
                            <a href="areaAdm.php?link=6&acao=Excluir&id=<?= $cliente["id_cliente"] ?>"><i class="bi bi-trash"></i></a>  
                        </td>
                    </tr>  

                    <?php } ?>

                </table>
            </div>
        </div>
    </div>
    
</body>
</html>