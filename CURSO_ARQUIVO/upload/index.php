<html>
    <head>
        <meta charset="utf-8">
        <title>upload arquivo</title>
    </head>
    <body>
        <h1>Fazendo upload de arquivos PHP</h1>
        <form method="POST" action="upload.php" enctype="multipart/form-data">
            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="200000"> -->
            <input type="file" name="arquivo">
            <input type="submit" name="enviar arquivo">
        </form>
        <!-- <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="arquivo">
            <button type="submit">Enviar</button>
        </form> -->
    </body>
</html>