<div>
    <h1>Jogo descubra o numero</h1>
    <p>vc tem 5 chances para descobrir o numero</p>

    <form>
        <input type="number" name="intNumber">
        <input type="submit" value="Verificar">
    </form>

    <p>Seu numero esta entre 1 e 100</p>
</div>

<?php

    $numero = $_GET["intNumber"];
    $min = 1;
    $max = 100;

    const CHANCE = [10];
    $erros = [];

    $gerado = rand($min, $max);
       
    // echo gerador($min, $max);

    if($numero == $gerado) {
        echo "acerto";
    }else {
        echo "errou";
    }