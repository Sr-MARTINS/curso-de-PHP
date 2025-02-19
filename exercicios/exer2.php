<div>
    <form method="POST">
        <h1>Dias vivido</h1>
        <p>Informe suas informações <br>
           Ano:  <input type="number" min="1" max="30" name="dia"> <br>
           Mês:  <input type="number" min="1" max="12" name="mes"> <br>
           Dia:  <input type="number" min="1" max="10000" name="ano">
        </p>
        <input type="submit" value="Calcular">
    </form>
</div>

<?php
   $day = $_POST["dia"];
   $monht = $_POST["mes"] * 30;
   $year = $_POST["ano"] * 365;

   $diasVivido = $day + $monht +$year;
   
   echo "Você tem " .$diasVivido ."dias vivido";
?>