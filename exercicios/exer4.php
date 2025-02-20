<form method="POST">
    <h1>Salario liquido de um funcionario</h1>
    <p>Nome: 
        <input type="text" name="intName">
    </p>
    <p>
        Numero de hora:
        <input type="number" min="1" name="intHora"> <br>
        Numero de dependecias:
        <input type="number" min="1" name="intDependencia">
    </p>

    <input type="submit" value="Calcular">
</form>

<?php
    $nome = $_POST["intName"];
    $horas = $_POST["intHora"];
    $dependencia = $_POST["intDependencia"];

    $valorHora = $horas * 12;
    $valorDependencia = $dependencia * 40;
    
    $salarioBruto = $valorHora + $valorDependencia;
    
    $descontoINSS = $salarioBruto  * 0.085;
    $descontoIR = $salarioBruto * 0.05 ;

    $salarioLiquido =  $salarioBruto - ($descontoINSS + $descontoIR);

    echo "Nome do funcionario: " .$nome ."<br>"
    ."Salario Bruto: " .$salarioBruto ."<br>"
    ."Desconto de INSS: " .$descontoINSS ."<br>"
    ."Desconto do IR: " .$descontoIR ."<br> <br>"
    ."Salario Liquido: " .$salarioLiquido ;


