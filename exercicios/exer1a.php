<?php
    $nome = $_POST["intNome"];
    $idade = $_POST["intIdade"];
    $cargo = $_POST["intCargo"];
    $salario = $_POST["intSalario"];

    $reajuste = 0.38 * $salario  ;
    $gratificacao = 0.20 * $salario ;
    
    $salarioTotal = $salario + $reajuste + $gratificacao;
    $salarioLiquido = $salarioTotal - 0.15 * $salarioTotal  ;

    $desconto = $salarioTotal - $salarioLiquido;

    echo "Nome: ".$nome ."<br>"
     ."Idade: ".$idade ."<br>"
     ."Cargo: ".$cargo ."<br>"
     ."Salario Bruto: ".$salario ."<br> <br>"
     ."+ Reajuste de --- " .$reajuste ."<br>"
     ."+Gratificação de --- " .$gratificacao ."<br>"
     ."-Desconto de --- " .$desconto ."<br><br>"
     ."Salario Liquido: ".$salarioLiquido;

?>