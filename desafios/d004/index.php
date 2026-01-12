<?php
    $data_cotacao = date("m-d-Y");
    
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao=\'' . "$data_cotacao". '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados = json_decode(file_get_contents($url), true);

    $cotacao = $dados["value"]["0"]["cotacaoCompra"];

    $reais = $_GET["reais"] ?? 0;

    $dolares = $reais / $cotacao;
    
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d004</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas Básico</h1>
        <section>
            <form action="<?= $_SERVER["PHP_SELF"] ?>">
                <label for="reais">Quantos R$ você tem na carteira?</label>
                <input type="number" name="reais" id="reais" value="<?= $reais ?>" step="0.01" required>

                <input type="submit" value="Converter">
            </form>
        </section>

        <section>
            <h2>Resultado</h2>
            <?php
                //mostrar resultado de forma básica
                echo "Seus R$" . number_format($reais, 2, ",", ".") . " valem US$ " . number_format($dolares, 2, ",", ".");

                //mostrar resultado usando a biblioteca intl
                //$padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                //echo "Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " valem " . numfmt_format_currency($padrao, $dolares, "USD")
            ?>
        </section>
    </main>
</body>
</html>