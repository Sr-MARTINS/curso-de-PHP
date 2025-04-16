<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercico Herança</h1>

    <?php

        require_once "Pessoa.php";
        require_once "Visitante.php";
        require_once "Aluno.php";
        require_once "Professor.php";
        require_once "Tecnico.php";
        require_once "Bolsista.php";


        $p1 = new Visitante("Pedro", 22, "M");

        $a1 = new Aluno("Maria", 18, "F");
        $a1->setCurso("infromatica");
        $a1->setMatr(1111);
        $a1->pagarMensalidade();

        $b = new Bolsista("Claudio", 45, "M", 50);
        $b->setMatr(1112);
        $b->setCurso("Matematica");
        $b->pagarMensalidade();
        $b->setBolsa(12.5);


        echo "<pre>";
            print_r($p1);
            print_r($a1);
            print_r($b);

    
    ?>
    
</body>
</html>