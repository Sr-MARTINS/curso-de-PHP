<?php

  require("include/config.php");
  require("include/crud.php");

  openConnect();
?> 
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
            Lista de Curso
        </h3>

        <div style=" height: 300px">
            <div style="margin:5px 0 10px 0;">
                <button class="btn btn-success" style="padding:1px ;" >
                    <a style="color: #fff" href="cadastrarCliente.php">Cadastrar Curso</a>       
                </button>
            </div>
            <div style="padding:10px 10px 10px 20px; border:1px solid #a8a6a6; border-radius: .5rem; ; overflow-x: auto;  " >

                <?php
                    $aulas = consultar("aula");
                    foreach($aulas as $aula) {
                ?>

                <table class="table" style="overflow-x: auto;">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Titulo da aula</th>
                        <th scope="col">Codigo</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Ativo</th>
                        <th scope="col">Ação</th>
                    </tr>

                    <tr>
                        <th><?php echo $aula["id_aula"] ?></th>
                        <td><?php echo $aula["titulo_aula"] ?></td>
                        <td><?php echo $aula["codigo"] ?></td>
                        <td><?php echo $aula["tipo"] ?></td>
                        <td><?php echo $aula["atv_aula"] ?></td>
                        
                        <td style="text-aling:center">
                            <a href="#">Editar</a> <a href="#">Excluir</a>  
                            <!-- <a href="#">Matricular</a> -->
                        </td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>