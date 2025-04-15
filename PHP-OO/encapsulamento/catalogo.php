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
        require_once('Luta.php');

        $L = array ();

        $L[0] = new Lutador("martins", "BR", 29, 1.75, 60.9, 14, 2, 3);
        
        $L[1] = new Lutador("silva", "FR", 30, 1.70, 66.0, 12, 2, 1);
        
        $L[2] = new Lutador("roberto", "USA", 30, 1.70, 65.0, 10, 3, 2);

        $L[3] = new Lutador("Pedro", "BR", 28, 1.75, 70.0, 8, 5, 2);

        $L[4] = new Lutador("Victor", "USA", 34, 1.95, 120.0, 10, 0, 1);

        $L[5] = new Lutador("Lucas", "BR", 22, 1.56, 50.0, 5, 2, 3);


        // $L ->apresentar();

        // echo "<pre>";
        // print_r($L);
        // $L[1]->ganharLuta() ;
        // $L[1]->derrotaLuta();
        // $L[1]->lutasEmpate();
        // $L[1]->status();
        
        $UFC = new Luta();
        $UFC->marcarLuta($L[0], $L[0]);

        // echo "<hr>";
        $UFC->lutar();
        // print_r($UFC);
        $L[0]->status();
        $L[1]->status();





    ?>
    
</body>
</html>