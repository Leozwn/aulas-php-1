<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisando PHP intercalado com HTMl</title>
</head>
<body>
    <h1>Revisando PHP intercalado com HTML</h1>
    <hr>

    <?php
        $aluno = "Fulano";
        const ESCOLA = "Senac Penha";

        echo "<p>O aluno se chama $aluno</p>";
        echo "<p>Ele estuda na escola ".ESCOLA."</p>";
    ?>

    <h2>Usando PHP intercalando com HTML</h2>
    <p><i>(Usar o PHP onde precisa)</i></p>
    <p>O aluno se chama <?= ESCOLA ?></p>

    <hr>

    <h2>Usando PHP intercalando comandos com HTML</h2>

    <?php $idade = 25; ?> <!-- PHP onde preciso -->

    <h3>Resultado:</h3>

    <?php
        if($idade >= 18){
            echo"<p><b>$aluno</b> é maior de idade</p>";
        } else {
            echo"<p><b>$aluno</b> é menor de idade</p>";
        }
    ?>

    <h3>Resultado (Usando PHP só onde é necessário):</h3>
    <?php
        if($idade >= 18){
    ?>
        <p><b><?= $aluno ?></b> é maior de idade</p>
    <?php
        } else {
    ?>
            <p><i><?= $aluno ?></i> é menor de idade</p>
    <?php
        }
    ?>

    <!-- Usando "if" sem abrir chaves -->
    <h3>Resultado (Usando PHP só onde é necessário):</h3>
    <?php
        if($idade >= 18):
    ?>
        <p><b><?= $aluno ?></b> é maior de idade</p>
    <?php
        else:
    ?>
            <p><i><?= $aluno ?></i> é menor de idade</p>
    <?php
        endif;
    ?>

    <h3>Resultado (refatorado)</h3>
    <i>(Veja que, mudando a lógica e usando variáveis auxiliares, nem precisamos fazer as separações de PHP com HTML)</i>
    <?php
        if($aluno >= 18){
            $htmlSaida = "<b>$aluno</b>";
            $palavra = "maior";
        } else {
            $htmlSaida = "<i>$aluno</i>";
            $palavra = "menor";
        }
    ?>

    <p> <?= $htmlSaida ?> é <?= $palavra ?> de idade</p>
    
</body>
</html>