<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
    <style>
        body{font-family: sans-serif;}

        div{
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,.2);
            font-family: Arial, sans-serif;
            width: 400px;
            margin: auto;
            margin-top: 30px;
        }

        .infantil{
            padding: 20px;
            background-color: #d9f3ff;
            border: 2px solid #4da6ff;
            color: #005c99; 
        }

        .adulto{
            padding: 20px;
            background-color: #e8f5e9;
            border: 2px solid #43a047;
            color: #1b5e20; 
        }

        .melhor-idade{
            padding: 20px;
            background-color: #fff3cd;
            border: 2px solid #f0ad4e;
            color: #8a6d3b;  
        }
    </style>
</head>
<body>
    <h1>Exercício 03: condicionais e uso do PHP intercalado com HTML</h1>
    <hr>

    <?php
        $idade = 60;

        if($idade < 12){
            $classeCSS = "infantil";
            $categoriaIngresso = "Infantil";
            $valorIngresso = 25.00;
        } elseif($idade < 60){
            $classeCSS = "adulto";
            $categoriaIngresso = "Adulto";
            $valorIngresso = 40.00;
        } else {
            $classeCSS = "melhor-idade";
            $categoriaIngresso = "Melhor idade";
            $valorIngresso = 20.00;
        }

        $formatarMoeda = "R$ " . number_format($valorIngresso, 2, ",", ".");
    ?>

    <div>
        <ul class="<?= $classeCSS ?>">
            <li>Idade da pessoa: <?= $idade ?></li>
            <li>Categoria do ingresso: <?= $categoriaIngresso ?></li>
            <li>Valor do ingresso: <?= $formatarMoeda ?></li>
        </ul>
    </div>
</body>
</html>