<div>
    <form method="POST">
        <input type="submit" value="Mostrar">
    </form>
</div>

<?php
    $soma = 0;
    
    for($i=100; $i <= 200; $i++) {
        if($i % 5 == 0) {
            $soma += $i;
           echo $i ."<br>";
        }
    }

    echo "Multipos por 100" ;