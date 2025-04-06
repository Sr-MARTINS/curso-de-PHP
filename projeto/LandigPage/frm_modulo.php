<?php
    @$id   = $_GET["id"];
    @$acao = $_GET["acao"];

    if($acao) {
        $dados = consultar("modulo", "id_modulo = $id");

        @$modulo     = $dados[0]["titulo_modulo"];
        @$atv_modulo = $dados[0]["atv_modulo"];

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
           Cadastrar Modulo
        </h3>

        <div style="margin:22px 0 10px 22px;">
                <button class="btn btn-success">
                    <a style="color: #fff" href="areaAdm.php?link=5">Voltar</a>
                </button>
            </div>

        <div style="padding:20px ;">
            
            <div style="padding:20px 20px 20px 30px; border:1px solid #a8a6a6; border-radius: .5rem; ; overflow-x: auto">
                
            <form action="opModulo.php" method="POST">
                <div class="mb-3" style="display:flex; justify-content: space-evenly;">
                    <div style="display:flex; flex-direction: column">
                        <label for="endereço" class="form-label">Titulo do Modulo:</label>

                        <input style="width:200px" type="text" name="intModulo" class="form-control" value="<?php echo @$modulo ?>">
                    </div>

                    <div style="display:flex; flex-direction: column">
                        <label for="Fone" class="form-label">Ativo:</label>
                        
                        <input style="width:200px" type="text" name="intAtv" class="form-control" value="<?= @$atv_modulo ?>">
                    </div>
                </div>

                <input type="hidden" name="id" value="<?php echo @$id ?>">
                <input type="hidden" name="acao" value="<?php if(@$acao != ""){echo $acao;}else{ echo "Cadastrar";} ?>">

                <input type="submit" class="btn btn-success" style="margin-top:2rem;" value="<?php if(@$acao != "") {echo $acao;}else{echo "Cadastrar Modulo";}?>">
                
            </form>
            </div>
        </div>
    </div>
    
</body>
</html>