<?php
    $reais = $_GET["reais"] ?? 0;
    $dolares = $reais / 5.37;
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d003</title>
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
                //echo "Seus R$" . number_format($reais, 2, ",", ".") . " valem US$ " . number_format($dolares, 2, ",", ".");

                //mostrar resultado usando a biblioteca intl
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                echo "Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " valem " . numfmt_format_currency($padrao, $dolares, "USD")
            ?>
        </section>
    </main>
</body>
</html>