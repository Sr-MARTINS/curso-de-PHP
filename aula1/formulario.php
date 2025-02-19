<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fzendo envio de formulario</title>
</head>
<body>
    <!-- <form action="forSoma.php" method="POST">
        <p>Numero para fazer conta <br> <br>
        Numero de a : <input type="text" name="intA"> <br><br>
        Numero de b : <input type="text" name="intB">
        </p> <br>

        <input type="submit" value="Somar">
    </form> -->
    
    <h1>Media de alunos</h1>
    <form action="forSoma.php" method="POST">
        <p>Nota 1 : <input type="number" max="10" min="1" name="intN1"> </p>
        <p>Nota 2 : <input type="number" max="10" min="1" name="intN2"> </p>
        <p>Nota 3 : <input type="number" max="10" min="1" name="intN3"> </p>
        <p>Nota 4 : <input type="number" max="10" min="1" name="intN4"> </p>
    
        <input type="submit" value="Somar">
    </form>

</body>
</html>