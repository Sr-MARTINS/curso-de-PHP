<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Polimorfismo sobreposeção</h2>

    <?php
        
        require_once 'Ave.php';
        require_once 'Reptil.php';
        require_once 'Mamifero.php';
        require_once 'Peixe.php';

        require_once 'Arara.php';
        require_once 'Cobra.php';
        require_once 'Cachorro.php';
        require_once 'Canguru.php';
        require_once 'Goldfish.php';
        require_once 'Tartaruga.php';



        //AVE
        $a = new Arara();
        // $a->locomover();

        //REPTIL
        $c1 = new Cobra();
        // $c1->locomover();

            //MAMIFERO
        $m = new Mamifero();
        $m->emitirSom();
        
        $c2 = new Canguru();
        // $c2->locomover();

        $c3 = new Cachorro();
        $c3->locomover();
        $c3->emitirSom();

        //PEIXE
        $p1 = new Goldfish();
        // $p1->locomover();

        // echo "<pre>";
        // print_r($a);
        // print_r($r);
        // print_r($m);



    ?>
    
</body>
</html>