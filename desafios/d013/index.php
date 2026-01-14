<?php
    $valor = $_POST["v"] ?? 135;

    // Calcula os saques
    $resto = $valor;

    $cem = (int) ($resto / 100);
    $resto = $resto % 100;
    
    $cinquenta = (int) ($resto / 50);
    $resto = $resto % 50;

    $dez = (int) ($resto / 10);
    $resto = $resto % 10;

    $cinco = (int) ($resto / 5);
    $resto = $resto % 5;

?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d013</title>
    <link rel="stylesheet" href="../style.css">
    <style>
        img.notas{
            height: 80px;
        }
    </style>
</head>
<body>
    <section>
        <h2>Caixa Eletrônico</h2>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="v">Qual o valor você deseja sacar? R$ *</label>
            <input type="number" name="v" id="v" value="<?= $valor ?>" min="0">

            <p>*Notas disponíveis: R$100, R$50, R$10, R$5</p>

            <input type="submit" value="Sacar">
        </form>
    </section>

    <section>
        <h2>Saque de R$ <?= number_format($valor, 2, ",", ".") ?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img class="notas" src="imagens/100-reais.jpg" alt="Nota de R$100">x<?= $cem ?></li>
            <li><img class="notas" src="imagens/50-reais.jpg" alt="Nota de R$50">x<?= $cinquenta ?></li>
            <li><img class="notas" src="imagens/10-reais.jpg" alt="Nota de R$10">x<?= $dez ?></li>
            <li><img class="notas" src="imagens/5-reais.jpg" alt="Nota de R$5">x<?= $cinco ?></li>
        </ul>
    </section>
</body>
</html>