<div>
    <h1>Maior numero</h1>
    <form method="POST">
        <p>Numero 1: <input type="number" min="0" name="int1"></p>
        <p>Numero 2: <input type="number" min="0" name="int2"></p>

        <input type="submit" value="Comparar">
    </form>
</div>

<?php
    $number1 = $_POST["int1"];
    $number2 = $_POST["int2"];

    if($number1 > $number2) {
        echo "O valor " .$number1 ." é maior que " .$number2;
    }
    else {
        echo "O valor " .$number2 ." é maior que " .$number1;
    };