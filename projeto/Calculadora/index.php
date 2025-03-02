<div>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href=" css/style.css">
    </head>
    <body>
        <div class="container">
            <h1>Calculadora</h1>
            <form action="serv.php" method="POST">
                <div id="box-input">
                    <input type="number" min="1"   name="oneValor" placeholder="2"> 

                    <select class="form-select" name="valores">
                        <option class="card" name="mais" value="mais">+</option>
                        <option class="card" name="menos" value="menos">-</option>
                        <option class="card" name="multi" value="mult">*</option>
                        <option class="card" name="divisao" value="divisao">%</option>
                    </select>

                    <input type="number"  min="1"  name="truValor" placeholder="5">
                </div>
    
                <input type="submit" value="Calcular">
            </form>
        </div>
        
    </body>
    </html>
</div>

<?php

    // $template = `
    //     <div class = "box-Resp"> 
    //         <p> </p>
    //     </div>
    // `

?>
