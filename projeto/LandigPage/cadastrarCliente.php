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
           Cadastro de Cliente
        </h3>

        <div style="margin-top:3rem;">
            <div style="margin:10px;">
                <button  class="btn btn-secondary">
                    <a style="color: #fff" href="cadastrarCliente.php">Dados Pessoais</a>
                </button>
                <button  class="btn btn-secondary" >
                    <a style="color: #fff" href="cadastrarCliente.php">Configurações</a>
                </button>
            </div>
        </div>

        <div style="padding:20px ;">
            
            <div style="padding:20px 20px 20px 30px; border:1px solid #a8a6a6; border-radius: .5rem; ; overflow-x: auto">
                
            <form>
                <div class="mb-3">
                    <label for="Nome" class="form-label">Nome:</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="Email   " class="form-label">Email :</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3" style="display:flex; justify-content: space-evenly;">
                    <div style="display:flex; flex-direction: column">
                        <label for="Endereço" class="form-label">Endereço:</label>
                        <input style="width:200px" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div style="display:flex; flex-direction: column">
                        <label for="Fone" class="form-label">Fone:</label>
                        <input style="width:200px" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <button style="margin-top:2rem;"  type="submit"  class="btn btn-success">
                    Cadastrar Cliente
                </button>
            </form>
            </div>
        </div>
    </div>
    
</body>
</html>