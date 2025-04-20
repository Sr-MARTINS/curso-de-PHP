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
        require_once 'ContaPoupanca.php';

        $c = new Conta(12, 111-1, "Martins");
        $cc = new ContaCorrente(10, 222-2, "MartinsCorrente", 100, 100 );
        $cp = new ContaPoupanca(50, 33-3, "martinsPoup", 100, 0.9);

        // $cc ->depositar(50);
        // $cc ->sacar(30);
        // $cc ->sacar(200);
        // $cc ->depositar(50);
        // $cc ->depositar(50);
        $cc->transferir(100, $cp);


        
        // $cp->transferir(50, $cc);
        // $cp->sacar(50);

        echo "<pre>";
            print_r($c);

            print_r($cc);

            print_r($cp);
    ?>
    
</body>
</html>