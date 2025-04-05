<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/areaAdm.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <header class="d-flex align-items-center justify-content-between px-3">
        <div>
            <h3>Area Administrativa</h3>
        </div>
        <nav>
            <ul>
                <li><a href="areaAdm?link=1">Home</a></li>
                <li><a href="areaAdm?link=2">Clientes</a></li>
                <li><a href="areaAdm?link=3">Curso</a></li>
                <li><a href="areaAdm?link=4">Modulo</a></li>
            </ul>
        </nav>
        <div>
        <button class="btn btn-link">
            <i class="bi bi-power"></i>
        </button>
        </div>
    </header>
    <main style="border: 1px solid #000; width:80%; margin:2rem auto"; >
        <p>oi</p>

        <?php
            $link = $_GET["link"];

            $pag["1"] = "home.php";
            $pag["2"] = "cliente.php";
            $pag["3"] = "editar.php";
            $pag["4"] = "deletar.php";
            $pag["5"] = "lista.php";
        ?>
    
    </main>

</body>
</html>