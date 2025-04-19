<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Sis-Bancario</h1>

    <?php

        require_once 'Conta.php';
        require_once 'ContaCorrente.php';

        $c = new Conta(12, 111-1, "Martins");

        $cc = new ContaCorrente(10, 222-2, "MartinsCorrente", 100, 100 );
        $cc->sacar(100);
        $cc->sacar(20);
        // $cc->sacar(50);
        // $cc->depositar(20);
        // $cc->sacar(90);

        echo "<pre>";
            print_r($c);

            print_r($cc);
    ?>
    
</body>
</html>