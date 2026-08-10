<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
    <style>
        *, *::before, *::after {
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
        }

        div {
            display: flex;
            justify-content: space-evenly;
            padding-top: 20px;
        }

        article {
            background-color: ghostwhite;
            border: 1px solid;
            border-radius: 15px;
            box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.4);
            padding: 15px;

            h2{
                text-align: center;
                color: darkblue;
            }
        }
    </style>
</head>
<body>
    <h1>Exercício 02: estruturas de dados com arrays e objetos</h1>
    <hr>

    <?php
        $arrayAssociativo = [
            "nome_de_usuario" => "Lucas Oliveira",
            "email" => "lucas.oliveira92@exemplo.com",
            "senha" => "123465",
            "idade" => 28,
            "sexo" => "Masculino",
            "cidade" => "Campinas (SP)"
        ];

        $objetoGenerico = new stdClass;
        $objetoGenerico -> nome_de_usuario = "Marina Costa";
        $objetoGenerico -> email = "marina.costa87@exemplo.com";
        $objetoGenerico -> senha = "abcde";
        $objetoGenerico -> idade = 34;
        $objetoGenerico -> sexo = "Feminino";
        $objetoGenerico -> cidade = "Florianópolis (SC)";
    ?>

    <div>
        <article>
            <h2>Array Associativo</h2>
            <p>Nome: <?= $arrayAssociativo["nome_de_usuario"] ?></p>
            <p>E-mail: <?= $arrayAssociativo["email"] ?></p>
            <p>Senha: <?= $arrayAssociativo["senha"] ?></p>
            <p>Idade: <?= $arrayAssociativo["idade"] ?></p>
            <p>Sexo: <?= $arrayAssociativo["sexo"] ?></p>
            <p>Cidade: <?= $arrayAssociativo["cidade"] ?></p>
        </article>

        <article>
            <h2>Objeto Genérico</h2>
            <p>Nome: <?= $objetoGenerico -> nome_de_usuario ?></p>
            <p>E-mail: <?= $objetoGenerico -> email ?></p>
            <p>Senha: <?= $objetoGenerico -> senha ?></p>
            <p>Idade: <?= $objetoGenerico -> idade ?></p>
            <p>Sexo: <?= $objetoGenerico -> sexo ?></p>
            <p>Cidade: <?= $objetoGenerico -> cidade ?></p>
        </article>
    </div>
</body>
</html>