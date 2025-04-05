<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
</head>
<body>
    <div style="width:800px; padding-top:1rem ; margin:2rem auto; border:1px solid black">
        <h3 style="margin:auto; padding-bottom:10px; text-align:center; border-bottom: 1px solid #a8a6a6; width:80%;">
            Lista de Clientes
        </h3>

        <div style="margin-top:10px;">
            <nav class="navbar bg-body" style="backgrond-color:grey; border-bottom: 1px solid #a8a6a6; padding: 1.6rem 10px ; ">
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
            <div style="margin:10px;">
                <button class="btn btn-success" >
                    <a  href="areaAdm.php?link=6" style="color: #fff">Cadastrar Cliente</a>
                    
                </button>
            </div>
            <div style="padding:20px 20px 20px 30px; border:1px solid #a8a6a6; border-radius: .5rem; ; overflow-x: auto">
                <table class="table" style="overflow-x: auto;">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th style="text-aling:center">Ação</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                        $clientes = consultar("cliente");
                        foreach($clientes as $cliente) {

                    ?>

                    <tr>
                        <th><?= $cliente["id_cliente"] ?> </th>
                        <td><?= $cliente["cliente"] ?> </td>
                        <td><?= $cliente["email"] ?> </td>
                        <td><?= $cliente["data"] ?> </td>
                        <td>
                            <a href="areaAdm.php?link=6&acao=Editar">Editar</a> /
                            <a href="areaAdm.php?link=6&acao=Excluir">Excluir</a>  
                        </td>

                        <td><a href="frm_cliente.php">ir</a></td>
                    </tr>

                    <?php } ?>
                    
                </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>