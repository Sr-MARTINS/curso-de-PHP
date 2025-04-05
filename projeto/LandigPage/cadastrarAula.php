<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">
</head>
<body>
    <div style="width:800px; padding-top:1rem ; margin:2rem auto; border:1px solid black">
        <h3 style="margin:auto; padding-bottom:10px; text-align:center; border-bottom: 1px solid #a8a6a6; width:80%;">
           Cadastrar Aula
        </h3>

        <div style="padding:20px ;">
            
            <div style="padding:20px 20px 20px 30px; border:1px solid #a8a6a6; border-radius: .5rem; ; overflow-x: auto">
                
            <form>
                <div style="display:flex; justify-content: space-evenly; margin-right: 94px;">
                    <div class="mb-3" style="margin-rigth: -30px">
                        <label for="Nome" class="form-label">Modulo:</label>
                        <select name="" class="form-control" id="exampleInputEmail1" style="width:300px" >
                            <option value="">Modulo 1</option>
                            <option value="">Modulo 2</option>
                            <option value="">Modulo 3</option>
                            <option value="">Modulo 4</option>
                            <option value="">Modulo 5</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Nome" class="form-label">Curso:</label>
                        <select name="" class="form-control" id="exampleInputEmail1" style="width:300px" >
                            <option value="">Curso 1</option>
                            <option value="">Curso 2</option>
                            <option value="">Curso 3</option>
                            <option value="">Curso 4</option>
                            <option value="">Curso 5</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3" style="margin-right:20px">
                    <label for="Endereço" class="form-label">Titulo da aula:</label>
                    <input style="margin-right:20px" type="password" class="form-control" id="exampleInputPassword1">
                
                </div>

                <div class="mb-3" style="margin-right:20px">
                    <label for="Endereço" class="form-label">Tipo de Video:</label>
                    <select name="" class="form-control" id="exampleInputEmail1" >
                            <option value="">Video 1</option>
                            <option value="">Video 2</option>
                            <option value="">Video 3</option>
                            <option value="">Video 4</option>
                            <option value="">Video 5</option>
                    </select>
                </div>

                <div class="mb-3" style="display:flex; justify-content: space-evenly; margin-right: 94px;" >
                    <div style="display:flex; flex-direction: column">
                        <label for="Endereço" class="form-label">Ativo:</label>
                        <input type="text" class="form-control" style="width:300px" >
                    </div>
                    <div style="display:flex; flex-direction: column">
                        <label for="Fone" class="form-label">Duração:</label>
                        <input type="text" class="form-control" style="width:300px" >
                    </div>
                </div>

                <div style="display:flex; flex-direction: column ">
                    <label style="margin-bottom:10px" for="texto">Texto:</label>
                    <textarea name="" placeholder="Digite um texto"></textarea>
                </div>

                <button style="margin-top:2rem;"  type="submit"  class="btn btn-success">
                    Cadastrar Aula
                </button>
            </form>
            </div>
        </div>
    </div>
    
</body>
</html>