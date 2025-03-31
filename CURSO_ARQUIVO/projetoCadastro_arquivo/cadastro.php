<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/novoCadastro.css">
</head>
<body>
    <h2 style="margin:10px 0 0 20px">Fromulario de cadastro </h2>
    <hr>

    <div id="envep">
    <form action="opCadastro.php" method="POST">
        <div id="boxForm">            
                <label for="nome">Nome</label>
                <input type="text" name="nome"  >
                
                <label for="email">Email</label>
                <input type="text" name="email"  >
                
                <label for="email">Telefone</label> 
                <input type="number" name="telefone">
        </div> 
        <div id="buttns">
            <input type="submit" class="btn btn-success"  >
            <!-- <input type="reset" name="Reset" class="btn btn-secondary"> -->
        </div>
    </form>
    </div>
    
</body>
</html>