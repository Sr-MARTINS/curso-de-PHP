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
        Vc esta na pg 2 <br>
        alo <?php echo $_COOKIE["cliente"] ?>
    </p>
    
</body>
</html>