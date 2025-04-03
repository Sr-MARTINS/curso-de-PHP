<?php 
    session_start();

    if(!$_COOKIE["cliente"]) {
        header("Location:cooks.php");
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        Pagina 1 <br>
        bem vindo <?php echo $_COOKIE["cliente"] ?> <br>
        <a href="Cpg1.php">Segunda pagina</a>
    </p>
    
</body>
</html>