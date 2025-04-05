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

    <div id="contHome" style="display:flex; justify-content:center;align-items: center; flex-direction: column; ;width: 80%;
    margin:auto;" >

        <h3 >Home</h3>
                
        <div id="boxCard" style="display: grid; grid-template-columns: 200px 200px; gap: 80px; margin:1rem 0">
            <div class="card_bt">
                <a href="areaAdm.php?link=1">
                    <img src="img/client.png" alt="">
                </a>
                <p>Cliente</p>
            </div>
            <div class="card_bt">
               <a href="areaAdm.php?link=2">
                    <img src="img/play.png" alt="">
               </a> 
                <p>Aula</p>
            </div>
            <div class="card_bt">
                <a href="areaAdm.php?link=3">
                    <img src="img/aula.png" alt="">
                </a>
                <p>Curso</p>
            </div>
            <div class="card_bt">
                <a href="areaAdm.php?link=4">
                    <img src="img/demanda.png"  alt="">
                </a>
                <p>Módulos</p>
            </div>
        </div>
    </div>
    
</body>
</html>