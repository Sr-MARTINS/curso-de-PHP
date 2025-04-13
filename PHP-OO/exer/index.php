<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta do Banco</title>
</head>
<body>
    <h2>Exercicio Conta do Banco</h2>

    <?php
    require_once 'ContaBanco.php';
        
    $p1 = new ContaBanco();
    $p1 ->abrirConta("CC");
    $p1 ->setNunConta("1111");
    $p1 ->setDono("Martins");
    $p1 -> depositar(300);
    // $p1 -> sacar(1000);
    $p1 -> fecharConta();


    $p2 = new ContaBanco();
    $p2 -> abrirConta("CP");
    $p2 -> setNunConta("2222");
    $p2 -> setDono("Mari");
    $p2 -> depositar(500);
    $p2 -> sacar(100);
    $p2 -> sacar(550);
    $p2 -> fecharConta();

    echo "<pre>";
        print_r($p1);
        print_r($p2);
    echo "</pre>";


    ?>
    
</body>
</html>