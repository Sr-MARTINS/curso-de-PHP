<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Site Leitor</h2>

    <?php

        require_once 'Pessoa.php';
        require_once 'Livro.php';

        $p1 = new Pessoa("Lucas", 22, "Masculino");
        // $p2 = new Pessoa("Maria", 25, "Feminino");

        $l1 = new Livro("Aprendendo PHP", "José da Silva", 300, $p1);
        // $l2 = new Livro("Aprendendo Java", "Maria da Silva", 500, $p2);

        echo "<pre>";    
        $l1->abrir();
        $l1->folhear(0);
        $l1->voltarPag();
        $l1-> detalhes();

        // echo $p1->getNome() ."<br>";

    ?>
    
</body>
</html>