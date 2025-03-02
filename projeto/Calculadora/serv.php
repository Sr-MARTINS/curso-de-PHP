<?php
    $valor1 = $_POST["oneValor"];
    $valor2 = $_POST["truValor"];

    $operacao = $_POST["valores"];

    if($operacao  == "mais") {
      $result = $valor1 + $valor2;
        
    }else if($operacao == "menos") {
      $result = $valor1 - $valor2;
        
    }else if($operacao == "mult") {
      $result = $valor1 * $valor2;
        
    }else {
     $result = $valor1 / $valor2;
      
    }
      
?>

<div id="boxResp">
  <head>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div id="elements">
      <div class="Resp">
        <p>A resposta do seu calculo é: </p>
        <p> <?php echo $result ?> </p>
      </div>

      <button type="submit" >
        <a href="http://localhost/cursoPHP/projeto/Calculadora/">Voltar</a>
      </button>
    </div>
 
  </body>
  </html>
    
</div>

