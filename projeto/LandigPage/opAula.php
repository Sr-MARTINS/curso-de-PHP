<?php
require("include/crud.php");

$id   = $_POST["id"];
$acao = $_POST["acao"];

$titulo     = $_POST["intTitulo"];
$tipo       = $_POST["intTipo"];
$codigo     = $_POST["intCodigo"];
$atv_aula   = $_POST["intAtv"];

$dados = array (
    "titulo_aula" => $titulo,
    "codigo"      => $codigo,
    "tipo"        => $tipo,
    "atv_aula"    => $atv_aula,
);

if(($titulo) && ($tipo) && ($codigo)) {

    if($acao == "Cadastrar") {
        $op = inserir("aula", $dados);
   }
   elseif($acao == "Editar") {
        $op = atualizarItem("aula", $dados, "id_aula = $id");
   }
   else {
       $op = delete("aula", "id_aula = $id");
   }

   if(@$op) {
        header("Location:areaAdm.php?link=3");
    }else {
        print "<META HTTP=REFRESH CONTENT = '0; URL=http://localhost/Cadastro/index.php?link=2'>
            <script type = 'text/javascript'> alert('Não foi possivel realizar a operação') </script>";
    }

}
