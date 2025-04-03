<?php
 session_start() ;
 var_dump($_COOKIE);
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Clogar.php" method="POST">
        Email: <input type="text" name="txt_nome"> <br>
        Senha: <input type="text" name="txt_senha"> <br>
        <input type="submit" value="enviar">
    </form>
    
</body>
</html>