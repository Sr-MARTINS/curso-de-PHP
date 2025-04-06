<?php
require("include/crud.php");

$id   = $_POST["id"];
$acao = $_POST["acao"];

$modulo     = $_POST["intModulo"];
$atv_modulo     = $_POST["intAtv"];


$dados = array (
    "titulo_modulo"   => $modulo,
    "atv_modulo"      => $atv_modulo,
);

if($modulo && $atv_modulo) {

    if($acao == "Cadastrar") {
        $op = inserir("modulo", $dados);
   }
   elseif($acao == "Editar") {
        $op = atualizarItem("modulo", $dados, "id_modulo = $id");
   }
   else {
       $op = delete("modulo", "id_modulo = $id");
   }

   if(@$op) {
        header("Location:areaAdm.php?link=5");
    }else {
        print "<META HTTP=REFRESH CONTENT = '0; URL=http://localhost/Cadastro/index.php?link=2'>
            <script type = 'text/javascript'> alert('Não foi possivel realizar a operação') </script>";
    }

}