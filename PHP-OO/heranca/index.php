<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Herança</h2>

    <?php

        require_once "Pessoa.php";
        require_once "Aluno.php";
        require_once "Professor.php";
        require_once "Funcionario.php";

        $p1 = new Pessoa("Pedro", 22, "M");
        $p2 = new Aluno("Maria", 18, "F");
        $p3 = new Professor("Claudio", 45, "M");
        $p4 = new Funcionario("Fabiana", 30, "F");

        $p2->setCurso("infromatica");
        $p2->setMatr(1111);
        $p2->cancelarMatr();

        $p3->setSalario(2500.75);
        $p3->setEspecialidade("Matematica");

        $p4->setSetor("Estoque");
        $p4->setTrabalhando(true);

        echo "<pre>";
            print_r($p1);
            print_r($p2);
            print_r($p3);
            print_r($p4);


    ?>
    
</body>
</html>