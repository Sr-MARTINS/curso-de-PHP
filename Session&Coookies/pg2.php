<?= 
    session_start();

    if(!$_SESSION["cliente"]) {
        
        header("Location:index.php");
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
    <p>Pagina 2 <br> Ola  <?php echo $_SESSION["cliente"] ?></p>
    
</body>
</html>