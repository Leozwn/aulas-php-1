<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <div class="container">

        <h1>Exercício 04: estruturas de repetição (loops) e estruturas de dados</h1>

        <?php
            $linguagens = [
                1 => ["HTML", "Estruturação"],
                2 => ["CSS", "Estilos"],
                3 => ["JS", "Comportamentos"],
                4 => ["PHP", "Back-End"],
                5 => ["SQL", "Manipulação de dados"],
            ];

            foreach($linguagens as $id => $valor):
        ?>
            <p> <?= $id ?> <?= $valor[0] ?> <?= $valor[1] ?> </p>
        <?php
            endforeach;
        ?>

        <table>
            <tr>
                <th>ID</th>
                <th>Linguagem</th>
                <th>Descrição</th>
            </tr>

            <?php foreach($linguagens as $id => $valor): ?>

            <tr>
                <td><?= $id ?></td>
                <td><?= $valor[0] ?></td>
                <td><?= $valor[1] ?></td>
            </tr>

            <?php endforeach; ?>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>