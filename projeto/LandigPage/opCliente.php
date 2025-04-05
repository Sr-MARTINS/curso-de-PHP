<?php
require("include/crud.php");

$acao = $_POST["acao"];

  $nome     = $_POST["intName"];
  $email     = $_POST["intEmail"];
  $endereco = $_POST["intEndereco"];
  $fone     = $_POST["telefone"];
  
if(empty($nome) || empty($emai) || empty($endeeco)) 
{
    print "<META HTTP=REFRESH CONTENT = '0; URL=http://localhost/Cadastro/index.php?link=5'>
         <script type = 'text/javascript'> alert('Não foi possivel realizar a operação') </script>";
         
}

$dados = array (
    "cliente"  => trim($nome),
    "email"    => trim($email),
    "endereco" => trim($endereco),
    "fone"     => trim($fone)
);


if($acao == "Cadastrar") {
    $op = inserir("cliente", $dados);
}
elseif($acao == "Editar") {
    // $opp = atualizarItem("cliente", $dados, "id_cliente = @$id");
}
else {
    // $opp = atualizarItem("cliente", "id_cliente = @$id")
}

if($op) {
    print "<META HTTP=REFRESH CONTENT = '0; URL=areaAdm.php?link=2'>
        <script type = 'text/javascript'> alert('Não foi possivel realizar a operação') </script>";

}else {
    print "<META HTTP=REFRESH CONTENT = '0; URL=http://localhost/Cadastro/index.php?link=6'>
        <script type = 'text/javascript'> alert('Não foi possivel realizar a operação') </script>";

}

?>