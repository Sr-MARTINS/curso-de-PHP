<div>
    <form method="POST">
        <p>Nome do aluno:
            <input type="text" require name="intName" >
        </p>
        <p>Notas: <br>
            1°: <input type="number" min="1" max="10" name="n1"> <br>
            2°: <input type="number" min="1" max="10" name="n2"> <br>
            3°: <input type="number" min="1" max="10" name="n3"> <br>
            3°: <input type="number" min="1" max="10" name="n4">
        </p>
        <input type="submit" value = "Calcular media"> 
    </form>
</div>

<?php
    $nome = $_POST["intName"];

    $nota1 = $_POST["n1"];
    $nota2 = $_POST["n2"];
    $nota3 = $_POST["n3"];
    $nota4 = $_POST["n4"];

    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

    if($media >= 7) {
        echo "Parabens " .$nome ." ! "  ."Voce foi aprovado";
    }else {
        echo "Infelizmente Voce foi reprovado"; 
    };