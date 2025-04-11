<?php
    require("vendor/autoload.php");

    use Carbon\Carbon ;
    
    echo "Oi A data de hoje é: " . Carbon::now() ."<br>"  ;

    echo "Daqui a 5 dias sera : " . Carbon::now()->addDays(5)  ."<br>"  ;