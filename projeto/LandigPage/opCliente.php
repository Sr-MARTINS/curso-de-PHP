<?php
require("include/crud.php");

$id   = $_POST["id"];
$acao = $_POST["acao"];

  $nome       = $_POST["intNome"];
  $email      = $_POST["intEmail"];
  $endereco   = $_POST["intEndereco"];
  $fone       = $_POST["telefone"];

  echo $nome ."<br>";
  echo $email ."<br>";
  echo $endereco ."<br>";
  echo $fone;

$dados = array (
    "cliente"  => $nome,
    "email"    => $email,
    "endereco" => $endereco,
    "fone"     => $fone,
    // "data"     => $fone
);

if(($nome) && ($email)) {

    if($acao == "Cadastrar") {
        $op = inserir("cliente", $dados);
   }
   elseif($acao == "Editar") {
        $op = atualizarItem("cliente", $dados, "id_cliente = $id");
   }
   else {
       // $opp = atualizarItem("cliente", "id_cliente = @$id")
   }

   if(@$op) {
    header("Location:areaAdm.php?link=2");
    }else {
        print "<META HTTP=REFRESH CONTENT = '0; URL=http://localhost/Cadastro/index.php?link=2'>
            <script type = 'text/javascript'> alert('Não foi possivel realizar a operação') </script>";
    }

}


?>