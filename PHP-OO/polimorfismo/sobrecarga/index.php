<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>polimorfismo de sobrecarga</h1>

    <?php

        require_once 'Mamifero.php';
        require_once 'Lobo.php';
        require_once 'Cachorro.php';

        $m = new Mamifero();
        $m->emitirSom();

        $l = new Lobo();
        $l->emitirSom();

        $c = new Cachorro();
        $c->emitirSom();

    ?>
    
</body>
</html>