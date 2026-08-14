<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1>Exercício 05: funções</h1>

        <?php
            $nota1 = 7;
            $nota2 = 8;
            $nota3 = 5;
            
            function calcularMedia($nota1, $nota2, $nota3){
                $total = ($nota1 + $nota2 + $nota3) / 3;
                return $total;
            }

            $media = calcularMedia($nota1, $nota2, $nota3);

            function mostrarMedia(float $media):string{
                if($media < 7) return "Reprovado";
                return "Aprovado";
            }
        ?>

        <hr>

        <h3>Aluno: Marcos De Oliveira</h2>
        <p>Média do Aluno: <b><?= number_format($media, 2) ?></b></p>
        <p>Situação do aluno: <b><?= mostrarMedia($media) ?></b></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
</body>
</html>