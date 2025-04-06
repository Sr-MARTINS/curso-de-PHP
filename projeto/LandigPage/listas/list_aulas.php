<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
</head>
<body>
    <div style="width:800px; padding-top:1rem ; margin:2rem auto; border:1px solid black">
        <h3 style="margin:auto ; padding-bottom:10px ; text-align:center; border-bottom: 1px solid #a8a6a6; width:80%;" >Aulas</h3>

        <div>
            <div></div>
            <nav class="navbar bg-body" style="backgrond-color:grey; border-bottom: 1px solid #a8a6a6; padding: 1.6rem 10px ; ">
            <div class="container-fluid">
                <a style="font-size:1.7rem ;"class="navbar-brand">Aulas</a>
                <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            </nav>
        </div>

        <div style="padding:20px ; height: 300px">
            <div style="margin:10px;">
                <button class="btn btn-success">
                    <a style="color: #fff" href="areaAdm.php?link=7">Cadastrar Aulas</a>
                </button>
            </div>
            <div style="padding:20px 20px 20px 30px; border:1px solid #a8a6a6; border-radius: .5rem; ; overflow-x: auto">

            <table class="table" style="overflow-x: auto;">

                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titulo da aula</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Ativo</th>
                    <th scope="col">Ação</th>
                </tr>

                <?php
                    $aulas = consultar("aula");
                    foreach($aulas as $aula) {
                ?>

                <tr>
                    <th><?php echo $aula["id_aula"] ?></th>
                    <td><?php echo $aula["titulo_aula"] ?></td>
                    <td><?php echo $aula["codigo"] ?></td>
                    <td><?php echo $aula["tipo"] ?></td>
                    <td><?php echo $aula["atv_aula"] ?></td>
                    
                    <td>
                        <a href="areaAdm.php?link=7&acao=Editar&id=<?=$aula["id_aula"] ?>">Editar</a> /
                        <a href="areaAdm.php?link=7&acao=Excluir&id=<?=$aula["id_aula"] ?>">Excluir</a>  
                    </td>
                </tr>
                <?php } ?>
            </table>
            </div>
        </div>
    </div>
    
</body>
</html>