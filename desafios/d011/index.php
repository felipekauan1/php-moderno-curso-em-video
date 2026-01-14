<?php
    $preco = $_GET["preco"] ?? 500;
    $percentual = $_GET["per"] ?? 50;

    // Calcula o preço do produto com o percentual de reajuste
    $novo_preco = $preco + ($preco * $percentual / 100)

?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d011</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Reajustador de Preços</h1>
    </header>

    <section>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="preco">Preço do Produto R$</label>
            <input type="number" name="preco" id="preco" value="<?= $preco ?>" min="0" step="0.01">

            <label for="per">Qual será o percentual de reajuste? <?= $percentual ?>%</label>
            <input type="range" name="per" id="per" value="0" min="0" max="100" step="1">

            <input type="submit" value="Reajustar">
        </form>
    </section>

    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$ <?= number_format($preco, 2, ",", ".") ?> com <strong><?= $percentual ?>%</strong> de aumento vai passar a custar R$ <?= number_format($novo_preco, 2, ",", ".") ?> a partir de agora</p>
    </section>
</body>
</html>