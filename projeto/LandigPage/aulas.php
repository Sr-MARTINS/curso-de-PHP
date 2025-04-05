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
                    <a style="color: #fff" href="cadastrarAula.php">Cadastrar Aulas</a>
                </button>
            </div>
            <div style="padding:20px 20px 20px 30px; border:1px solid #a8a6a6; border-radius: .5rem; ; overflow-x: auto">
                <table class="table" style="overflow-x: auto;">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Tipo de aula</th>
                        <th scope="col">Codigo</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Ativo</th>
                        <th style="text-aling:center">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>versao 1</td>
                        <td>3212</td>
                        <td>Y</td>
                        <td>S</td>
                        
                        <td style="text-aling:center">
                            <a href="#">Editar</a> /
                            <a href="#">Excluir</a>  
                            <!-- <a href="#">Matricular</a> -->
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>versao 1</td>
                        <td>3212</td>
                        <td>Y</td>
                        <td>S</td>
                        
                        <td style="text-aling:center">
                            <a href="#">Editar</a> /
                            <a href="#">Excluir</a>  
                            <!-- <a href="#">Matricular</a> -->
                        </td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>