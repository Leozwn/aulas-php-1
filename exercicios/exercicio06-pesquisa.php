<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisando outras funções para trabalhar com datas e horários em PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <h1>Pesquisando outras funções para trabalhar com datas e horários em PHP</h1>
        <hr>

        <!-- O que é timestamp?
        Timestamp é uma representação numérica de um momento específico no tempo. Esse termo em inglês pode ser traduzido “carimbo de data/hora”.

        Em vez de armazenar datas como texto, por exemplo, “20/12/2025 às 14h30”, os sistemas utilizam um número que indica exatamente quando um evento ocorreu, como “1766241000000”.

        Esse formato facilita o armazenamento, a comparação e o processamento de datas em aplicações digitais, especialmente quando há muitos registros sendo criados e analisados constantemente. -->

        <h3>time()</h3>
        <p>Finalidade: Retorna o horário atual com os segundos passados desde o dia 01/01/1970.</p>
        <p>Parâmetros: Não possui parâmetros.</p>
        <p>Valor retornado: Retorna o timestamp atual. </p>
        <p>Exemplo:
            <ul>
                <li><?= time() ?></li>
                <li><?= date("d/m/Y", time()) ?></li>
            </ul>
        </p>
            
        <hr>

        <h3>getdate()</h3>
        <p>Finalidade: Retorna um array associativo contendo a informação da data do timestamp, ou o horário atual local se timestamp for null ou omitido.</p>
        <p>Parâmetros: O parâmetro opcional timestamp é um int de timestamp Unix cujo padrão é a hora local atual se timestamp não for informado ou for null. Em outras palavras, o padrão é o valor de time().</p>
        <p>Valor retornado: Retorna um array associativo de informação sobre o timestamp.</p>
        <p> Exemplo: <br>
            <?= print_r(getdate()); ?></p>

        <hr>

        <h3>mktime()</h3>
        <p>Finalidade: Retorna o timestamp correspondente aos argumentos informados "mktime(hora, minuto, segundo, mes, dia, ano)".</p>
        <p>Parâmetros: Hora, minuto, segundo, mês, dia e ano — definem a data e a hora que serão convertidas em um timestamp.</p>
        <p>Valor retornado: A função mktime() retorna o timestamp Unix dos argumentos informados ou false se o timestamp não couber em um inteiro do PHP.</p>
        <p>Exemplo:
            <?php $timestamp = mktime(15, 30, 0, 12, 25, 2026); ?>
            <?= date("d/m/Y H:i:s", $timestamp); ?>
        </p>

        <hr>

        <h3>checkdate()</h3>
        <p>Finalidade: Verifica a validade da data formada pelos argumentos. Uma data é considerada válida se cada parâmetro é adequadamente definido.</p>
        <p>Parâmetros: month(O mês entre 1 e 12), day(O dia está dentro do número permitido de dias para o mês (month). Anos (year) bissextos são levados em consideração), year(O ano está entre 1 e 32767, inclusive).</p>
        <p>Valor retornado: Retorna true se a data informada é valida; caso contrário retorna false.</p>
        <p>Exemplo: 02/29/2026 <br>
            <?php 
                if (checkdate(02, 29, 2026)) {
                    echo "Data válida";
                } else {
                    echo "Data inválida";
                }
            ?>
        </p>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>