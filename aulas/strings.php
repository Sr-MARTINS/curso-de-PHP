<div>
    <form action="" method="post">
        numero em Assc : <input type="text" name="intNamber" value="2">
        <input type="submit">
    </form>
</div>

<?php

        // ( chr() ) para sabermos o determinado caracters em Assc
    $num = $_POST['intNamber'];
    // echo  "O numero: " .$num ."<br>" ." em Assc é: " .chr($num);

        // ( ord() ) retorna para string
    // echo  "O numero: " .$num ."<br>" ." em Assc é: " .ord($num); 

        // ( strlen() ) retorna o tamanho da string
        $nome = "JOAO";
        $nome2 = "joaopw";

    // echo "O seu nome: " .$nome ." tem " .strlen($nome) ." caracters <br>";

        //( strtolower() ) transforma em minuscula
    echo "formando string em maiuscula: " . strtolower($nome) ."<br>";
        // (str)
    echo "formando string em maiuscula: " . strtoupper($nome);
?>