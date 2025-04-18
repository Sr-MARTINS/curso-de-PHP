<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercicio final</h1>

    <?php

        require_once 'Video.php';
        require_once 'Gafanho.php';
        require_once 'Visualizacao.php';

        $v = new Video("Aula 1 de POO");

        $g = new Gafanho("Jubileu", 22, "M", 11111);

        $vis = new Visualizacao($g, $v);
        // $vis = avaliacao();
        
        $vis1 = new Visualizacao($g, $v);


        echo "<pre>";
            print_r($vis);
            print_r($vis1);

    ?>
    
</body>
</html>