<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cartel de luta</h2>

    <?php
        require_once('Lutador.php');

        // $L -> vetor[5];

        $L[0] = new Lutador("martins", "BR", 20, 1.65, 57.2, 14, 2, 3);
        
        $L[1] = new Lutador("silva", "FR", 30, 1.70, 65.0, 12, 2, 1);
        
        $L[2] = new Lutador("roberto", "USA", 25, 1.80, 70.0, 10, 3, 2);

        $L[3] = new Lutador("Pedro", "BR", 28, 1.75, 80.0, 8, 5, 2);

        $L[4] = new Lutador("Victor", "USA", 34, 1.95, 120.0, 10, 0, 1);

        $L[5] = new Lutador("Lucas", "BR", 22, 1.56, 50.0, 5, 2, 3);


        // $L[0].apresentar();

        echo "<pre>";
        print_r($L);



    ?>
    
</body>
</html>