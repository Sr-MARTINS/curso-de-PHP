<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Lista de Pessoas</h2>

    <a href="/pessoa/form">Cadastrar Pessoa</a>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Data de nascimento</th>
            <th>Opçoes</th>
        </tr>

        <?php foreach($model->rows as $itens): ?>
            <tr>
                <td><?= $itens->id   ?></td>
                <td><?= $itens->nome ?></td>
                <td><?= $itens->cpf  ?></td>
                <td><?= $itens->data_nascimento ?></td>
                <td>
                    <a href="/pessoa/form?id=<?=   $itens->id ?>">Edd</a>/
                    <a href="/pessoa/delete?id=<?= $itens->id ?>">EXX</a>
                </td>
            </tr>
        <?php endforeach ?>

        <?php if(count($model->rows) == 0) { ?>
            <tr>
                <td colspan="5">Nenhuma item encontrado</td>
            </tr>
        <?php } ?>
    </table>
    
</body>
</html>