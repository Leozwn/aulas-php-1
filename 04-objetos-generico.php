<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Objetos genéricos</title>
</head>
<body>
    <h1>Trabalhando com objetos/instâncias</h1>    
    <hr>
 
    <?php
    // Criando um objeto/instância a patir da classe std (Standard Class)
    $usuario = new stdClass;
 
    //Adicionando propriedades/atributos ao objeto
    $usuario -> codigo = 1;
    $usuario -> nome = "Leozera";
    $usuario -> email = "Leozera@gmail.com";
    $usuario -> idade = 22;
    $usuario -> telefones = ["11-2345-0000", "11-98689-4000"];  //array indexado
    $usuario -> endereco = [   //array associativo
        "logradouro" => "Rua xyz",
        "numero" => "1234A",
        "bairro" => "guilhermina",
        "cep" => "0354300",
    ];
    $usuario-> caracteristicas = new stdClass; // objeto dentro do usuario
    $usuario-> caracteristicas -> peso = 80;
    $usuario-> caracteristicas -> altura = 1.88;
    ?>

    <h2>Análise da estrutura</h2>
    <pre><?php var_dump($usuario) ?></pre>

    <h2>Acessando e exibindo os dados do objeto</h2>
    <ul>
        <li>Nome: <?= $usuario->nome ?></li>
        <li>E-mail:
            <a href="mailto:<?= $usuario->email ?>">
                    <?= $usuario->email ?>
            </a>
        </li>
        <li>Celular:
            <a href="tel:+55<?= $usuario->telefones[1] ?>">
                <?= $usuario->telefones[1] ?>
            </a>
        </li>
        <li>Peso:
            <a href="peso:<?= $usuario->caracteristicas->peso ?>">
                <?= $usuario->caracteristicas->peso ?>
            </a>

        </li>
        <li>Bairro:
           <?= $usuario->endereco["bairro"] ?>
        </li>
    </ul>


    <h2>Convertando objeto em array</h2>
    <?php 
    $pedido = new stdClass;
    $pedido-> numero ="123abc";
    $pedido-> valor_total = 1256.78;
    $pedido-> entrega =7;

    $arrayPedido = (array) $pedido;  //casting (conversão , pegando uma coisa e transformando em outra)
    ?>
    <h3>Analisando a estrutura do objeto original e do array gerado</h3>
    <pre><?php var_dump($pedido) ?></pre>
    <pre><?php var_dump($arrayPedido) ?></pre>

    <h2>Convertendo array em objeto</h2>
    <?php
    $curso = [
        "titulo" => "PHP Básico",
        "carga_horaria" => 40,
        "categoria" => "Back-End"
    ];
$objetoCurso = (object) $curso;  //casting (conversão)
?>
    <h3>Analisando a estrutura do array original e do objeto gerado</h3>
    <pre><?php var_dump($curso) ?></pre>
    <pre><?php var_dump($objetoCurso) ?></pre>
</body>
</html>