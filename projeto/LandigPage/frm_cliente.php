<?php
    @$id   = $_GET["id"];
    @$acao = $_GET["acao"];

    if($acao != "") {
        $dados = consultar("cliente", "id_cliente = $id");

        $nome       = $dados[0]["cliente"];
        $email      = $dados[0]["email"];
        $endereco   = $dados[0]["endereco"];
        $fone       = $dados[0]["fone"];

    }
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
           Cadastro de Cliente
        </h3>

        <div style="margin-top:3rem;">
            <div style="margin:10px;">
                <button  class="btn btn-secondary">
                    <a href="areaAdm.php?link=2" style="color: #fff">Voltar</a>
                </button>
                <button  class="btn btn-secondary" >
                    <a href="cadastrarCliente.php" style="color: #fff">Configurações</a>
                </button>
            </div>
        </div>

        <div style="padding:20px ;">
            
            <div style="padding:20px 20px 20px 30px; border:1px solid #a8a6a6; border-radius: .5rem; ; overflow-x: auto">
                
            <form action="opCliente.php" method="POST">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome:</label>

                    <input type="text" name="intNome" class="form-control" value="<?= @$nome ?>">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>

                    <input type="text" name="intEmail" class="form-control" value="<?php echo @$email ?>">
                </div>

                <div class="mb-3" style="display:flex; justify-content: space-evenly;">

                    <div style="display:flex; flex-direction: column">
                        <label for="endereço" class="form-label">Endereço:</label>

                        <input style="width:200px" type="text" name="intEndereco" class="form-control" value="<?php echo @$endereco ?>">
                    </div>

                    <div style="display:flex; flex-direction: column">
                        <label for="Fone" class="form-label">Fone:</label>
                        
                        <input style="width:200px" type="text" name="telefone" class="form-control">
                    </div>
                </div>

                <input type="hidden" name="id" value="<?php echo @$id ?>">
                <input type="hidden" name="acao" value="<?php if(@$acao != ""){echo $acao;}else{ echo "Cadastrar";} ?>">

                <input type="submit" class="btn btn-success" style="margin-top:2rem;" value="<?php if(@$acao != "") {echo $acao;}else{echo "Cadastrar Cliente";}?>">
            </form>
            </div>
        </div>
    </div>
    
</body>
</html>