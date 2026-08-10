<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
    <style>
        .destaque {
            color: blue;
            font-weight: bold;
        }
    </style>
</head>
<body>
    
    <h1>Exercício 01: uso de variáveis e/ou constantes PHP e integração com HTML</h1>

    <?php
        $data = "29 de julho de 2026";
        $nome = "Renan Rodrigues Pereira";
        $curso = "Tec. em informática para internet";
        $cargaHoraria = 1000;
        $limiteFaltas = $cargaHoraria * 0.25;
    ?>

    <p>Data: <span class = "destaque"><?=$data?></span></p>
    <p>Nome: <span class = "destaque"><?=$nome?></span></p>
    <p>Curso: <span class = "destaque"><?=$curso?></span></p>
    <p>Carga Horária: <span class = "destaque"><?=$cargaHoraria?></span></p>
    <p>Limite de faltas: <span class = "destaque"><?=$limiteFaltas?></span></p>

    <?php
        $teste = "vsdjn";
        echo $teste;
    ?>

</body>
</html>