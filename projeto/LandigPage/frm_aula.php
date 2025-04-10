<?php
    @$id   = $_GET["id"];
    @$acao = $_GET["acao"];

    if($acao) {
        $dados = consultar("aula", "id_aula = $id");

        @$nome     = $dados[0]["titulo_aula"];
        @$tipo     = $dados[0]["tipo"];
        @$codigo   = $dados[0]["codigo"];
        @$atv_aula = $dados[0]["atv_aula"];

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
           Cadastrar Aula
        </h3>

        <div style="margin:22px 0 10px 22px;">
                <button class="btn btn-success">
                    <a style="color: #fff" href="areaAdm.php?link=3">Voltar</a>
                </button>
            </div>

        <div style="padding:20px ;">
            
            <div style="padding:20px 20px 20px 30px; border:1px solid #a8a6a6; border-radius: .5rem; ; overflow-x: auto">
                
            <form action="opAula.php" method="POST">
                <div class="mb-3" style="margin-right:20px">
                    <label for="Endereço" class="form-label">Titulo da aula:</label>
                    <input style="margin-right:20px" type="text" class="form-control" name="intTitulo" value="<?= @$nome ?>" >
                
                </div>
                <div style="display:flex; justify-content: space-evenly; margin-right: 94px;">
                    <div class="mb-3" style="margin-rigth: -30px">
                        <label for="Nome" class="form-label">Tipo:</label>
                        <input type="text" name="intTipo" value="<?= @$tipo ?>">
                        <!-- <select name="" class="form-control" id="exampleInputEmail1" style="width:300px" >
                            <option value="">EDC</option>
                            <option value="">DDC</option>
                            <option value="">EBV</option>
                            <option value="">ASE</option>
                            <option value="">ASS</option>
                        </select> -->
                    </div>
                    <div class="mb-3">
                        <label for="Nome" class="form-label">Codigo:</label>
                        <input type="text" name="intCodigo" value="<?= @$codigo ?>">
                    </div>
                </div>

                <div style="display:flex; justify-content: space-evenly; margin-right: 94px;">
                    <div class="mb-3" style="margin-rigth: -30px">
                        <label for="Nome" class="form-label">Ativo:</label>
                        <input type="text" name="intAtv" value="<?= @$atv_aula ?>">
                        <!-- <select name="" class="form-control" id="exampleInputEmail1" style="width:300px" >
                            <option value="">EDC</option>
                            <option value="">DDC</option>
                            <option value="">EBV</option>
                            <option value="">ASE</option>
                            <option value="">ASS</option>
                        </select> -->
                    </div>
                </div>

                <input type="hidden" name="id" value="<?php echo @$id ?>">
                <input type="hidden" name="acao" value="<?php if(@$acao != ""){echo $acao;}else{ echo "Cadastrar";} ?>">

                <input type="submit" class="btn btn-success" style="margin-top:2rem;" value="<?php if(@$acao != "") {echo $acao;}else{echo "Cadastrar Aula";}?>">
                
            </form>
            </div>
        </div>
    </div>
    
</body>
</html>