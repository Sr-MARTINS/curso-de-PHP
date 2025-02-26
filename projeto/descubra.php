<?php
    if(@$_POST["iniciou"] != "S") {
        $sorteio = rand(1, 100);
        $tentativa = 0;
    }
    
   if(@$_POST["enviado"] == "S") {
        $numero = $_POST["intNumber"];
        $sorteio = $_POST["sorteio"];
        $tentativa = $_POST["tentativa"];

        if($numero < $sorteio) {
            $resp = "O numero é maior que " .$numero ;
            $tentativa++;

        }
        else if($numero > $sorteio) {
            $resp = "O numero é menor que " .$numero;
            $tentativa++;
        }
        else{
            $resp = "acertou" ."<br>"
            ."Você acertou com " .$tentativa ." tentativa";
        }
   }
?>

<div>
    <h1>Jogo descubra o numero</h1>
    <p>Seu numero esta entre 1 e 100</p>   
    <p>vc tem 5 chances para descobrir o numero</p>

    <form method="POST">
        Numero: <input type="number" name="intNumber"> <br>
         <input type="hidden" name="sorteio" value="<?php echo $sorteio ?>">
         <input type="hidden" name="tentativa" value="<?php echo $tentativa ?>">

        <input type="hidden" name="enviado" value="S">
        <input type="hidden" name="iniciou" value="S">

        <input type="submit" value="Verificar">
    </form>

</div>

<?php
 echo $resp ;
