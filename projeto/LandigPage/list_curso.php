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

        <div style="padding:20px ; height: 300px">
            <div style="margin:10px;">
                <button class="btn btn-success" >
                    <a style="color: #fff" href="cadastrarCliente.php">Cadastrar Curso</a>       
                </button>
            </div>
            <div style="padding:20px 20px 20px 30px; border:1px solid #a8a6a6; border-radius: .5rem; ; overflow-x: auto">
                <table class="table" style="overflow-x: auto;">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Titulo da aula</th>
                        <th scope="col">Codigo</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Ativo</th>
                        <th scope="col">Ação</th>
                        <th style="text-aling:center">
                            <a href="#">Editar</a> /  <a href="#">Exluir</a> 
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        
                        <td style="text-aling:center">
                            <a href="#">Editar</a> /
                            <a href="#">Excluir</a>  
                            <!-- <a href="#">Matricular</a> -->
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        
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