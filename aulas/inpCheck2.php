<?php
    // echo "Você esta estudando: " .$_POST["interesse"];

    $envio = $_POST["interesse"];
    $num = count($envio);

    // echo $num;

    for($i = 0; $i < $num; $i++) {
        echo $envio[$i] ."<br>";
    }
    
?>