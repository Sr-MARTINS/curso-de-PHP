<?php

  require("../back/include/config.php");
  require("../back/include/crud.php");

  openConnect();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar bg-body" id="topo">
            <div class="container-fluid">
              <a class="navbar-brand">Projeto Landing Page</a>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </nav>
    </header>
    <main>
        <div id="boxImg">
            <img src="img/Design-sem-nome-9.jpg" alt="">
        </div>
        <div id="boxForm">
            <div class="text-center" style="margin-bottom: 1.2rem">
              <h2>Ciclo de estudo</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi, pariatur ullam nemo quas ex amet.</p>
            </div>
            <form class="d-flex flex-column" action="../back/cadastro.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" name="intName" placeholder="Nome">
                
                <label for="email">Email:</label>
                <input type="text" name="intEmail" placeholder="Email">

                <input type="hidden" name="id_produto" value="1">

                <button type="submit" class="btn active" role="button" data-bs-toggle="button" aria-pressed="true" > Click </button>
            </form>
        </div>
    </main>
    
</body>
</html>