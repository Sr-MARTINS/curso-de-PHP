<?= 
    session_start();

    if(!$_SESSION["cliente"]) {
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <p>Seja bem-vindo <?php echo $_SESSION["cliente"] ?>  a pagna 1</p>
    <a href="pg2.php">vir para pagina 2</a>
    
</body>
</html>