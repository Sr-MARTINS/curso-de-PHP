<?php
    require_once("crud.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="campo">
        <nav class="navbar" style="width:100%">
            <div class="container">
                <div class="d-flex justify-content-center" style="margin-left:-50px">
                    <img src="img/capa.PNG" alt="" class="img-thumbnail" style="width:60px; margin-right:1rem;">
                    <h1>Sistema de Cadastro</h1>
                </div>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>

    <div id="box">
    <div  class="d-flex justify-content-start" style=" width: 100%; margin:auto;  padding:10px;">

        <div id="nav" >
            <span id="title">
                <h2>Menu</h2>
            </span>
            <ul>
                <li class="option"><a href="index.php?link=1"><i class="bi bi-house"></i>         Home </i></a>
                <li class="option"><a href="index.php?link=2"><i class="bi bi-journals"></i>      Novo Cadastro</a>
                <li class="option"><a href="index.php?link=3"><i class="bi bi-pencil-square"></i> Editar</a>
                <li class="option"><a href="index.php?link=4"><i class="bi bi-trash"></i>         Deletar</a>
                <li class="option"><a href="index.php?link=5"><i class="bi bi-list-task"></i>     Lista</a>
            </ul>  
        </div>

        <div style=" border:1px solid #000; width:80%; overflow-y: auto; height:500px;">

            <?php 

                @$link = $_GET["link"];

                $pag["1"] = "home.php";
                $pag["2"] = "cadastro.php";
                $pag["3"] = "editar.php";
                $pag["4"] = "deletar.php";
                $pag["5"] = "lista.php";
            
                if(!empty($link)) {
                    if(file_exists($pag["$link"])) {
                        include $pag["$link"];
                    }else {
                        include "home.php";
                    }
                }else {
                    include "home.php";
                }
            ?>

        </div>

        </div>
    </div>
    
</body>
</html>