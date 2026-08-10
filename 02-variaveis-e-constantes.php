<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Manipulando dados na memória</title>
    <style>
        .destaque {
            .destaque {color: red;}
        }
    </style>
</head>
<body>
    <h1>Usando variáveis e constantes</h1>
    <hr>

    <?php
        /* Variáveis */
        $curso = "Téc. Informática para Internet"; // String
        $ano = 2026; // Número inteiro
        $preco = 2112.55; // Número real/fracionado, decimal

        /* Constantes (Recomenda-se declarar em MAIÚSCULAS) */
        /* Essas são as duas formas de declarar constantes */
        /* "PROPRIETARIO" → é o nome da constante. */
        /* "Fulano de Tal" → é o valor da constante. */
        define("PROPRIETARIO", "Fulano de Tal"); // Antiga
        const EMPRESA = "ABC Tecnologia"; // Moderna
    ?>

    <h2>Exemplos de saídas de dados</h2>

    <?php
        // Usando concatenação>: Se usa o . (Ponto final)
        echo "<p>Estou fazendo o curso ".$curso." no ano de ".$ano."</p>";
        echo "<p>Trabalho na empresa <span class = 'destaque'>".EMPRESA."</span></p>"; // Funciona com constante

        // Usando interpolação: Se usa obrigatoriamente aspa dupla
        echo "<p>Estou fazendo o curso $curso no ano de $ano</p>";

        // Com aspas simples, a interpolação não funciona. Aparecem os nomes.
        echo '<p>Estou fazendo o curso $curso no ano de $ano</p>';
    ?>

    <h2>Exemplos de saídas de dados</h2>
    <h3>Usando a sintaxe abreviada/curta do PHP</h3>

    <!-- Saída abriviada usando trechos de PHP INLINE -->
    <p>Estou fazendo o curso <?php echo $curso ?> no ano de <?php echo $ano ?></p>
    <p>Trabalho na empresa <?php echo EMPRESA ?></p>

    <!-- Saída abreviada usando o comando echo através do sinal de igual -->
     <p>Estou fazendo o curso <?=$curso?> no ano de <?=$ano?></p>
    <p>Trabalho na empresa <span class = "destaque"><?=EMPRESA?></span></p>
</body>
</html>