<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();

        var_dump($_SESSION);
    ?>

    <form action="logar.php" method="post">
        Email: <input type="text" name="intName"> <br>
        senha: <input type="text" name="intSenha"> <br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>