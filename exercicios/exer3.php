<div>
    <form method="POST">
        <h1>Gerente de Loja</h1>
        <p>Produto: 
            <input type="text" step=".01" name="intProduto">
        </p>
        <p>Valor:
            <input type="number" step=".01" min="1" name="intValor">
        </p>

        <input type="submit" value="Saber forma de pagamento">
    </form>
</div>

<?php
    $item = $_POST["intProduto"];
    $valorItem = $_POST["intValor"];

    $entrada = $valorItem % 3 ;
    $parcelas = $valorItem / 3;

    $resultEntrada = number_format($entrada, 2);
    $resultParse = number_format($parcelas, 2);

    echo "Produto: " .$item ."<br>" ."Valor: " .$valorItem ."<br> <br>"
    ."Valor da entrada: " .$resultParse + $resultEntrada ."<br>"
    ."e 2x de: " .$resultParse;