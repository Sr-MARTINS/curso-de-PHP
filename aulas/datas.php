<?php

        //timezone
    //Transdorma na data do local formado
    date_default_timezone_set('Brazil/East');

echo "Data atual: " .date('d/m/Y / H:i:s') ."<br>";

    //Data

echo "('d') Retorna o Dia (num): " .date('d') ." / ('D') Retorna Dia da semama (nome): " .date('D') ."<br>";
echo "('j') Retorna o Dia (num sem o zero): " .date('j') ."<br>";
echo "('m') Retorna Mes (num): " .date('m') ."<br>";
echo "('n') Retorna o Mes (num sem o zero): " .date('n') ."<br>";
echo "('M') Retorna Dia do mes (nome): "  .date('M') ."<br>";
echo "('y') Retorna o Ano: " .date('y') ." / Retorna o ano completo: " .date('Y') ."<br>" ."<br>";

echo "('l') Retorna o nome do dia" .date('l') ."<br>";
echo "('F') Retorna o nome do mes " .date('F') ."<br>";
echo "('t') Retorna quantos dias tem o mes " .date('t') ;
echo "('z') Retorna o dias do ano " .date('z') ;

echo "<br> <br>";

    //Hora
echo "('H') Horario (24h)" .date('H');
echo "('i') Minutos (dois numeros)" .date('i') ."<br>";
echo "('F') Fuso horario" .date('T') ."<br>";
echo "('A - a') am(pm) - AM(PM) ('maiusculo ou minusculo')" .date('A') ."<br>";
?>