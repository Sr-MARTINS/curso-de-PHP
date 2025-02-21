<div>
    <h1>Numero Primo</h1>
    <form method="POST">
        <input type="number" name="intNum">
        <input type="submit" value="Verificar">
    </form>
</div>

<?php
    $num = $_POST["intNum"];
    $divisor = 2;

    while($num % $divisor != 0) {
        $divisor++ ;
    };

    if($num == $divisor){
        echo "O numero " .$num ." é primo";
    }else {
        echo "O numero" .$num ." NÂO é primo";
    };
;
    