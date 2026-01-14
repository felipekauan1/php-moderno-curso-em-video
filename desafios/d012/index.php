<?php
    $valor = $_POST["segun"] ?? 2000000;

?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d012</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
        $semanas = intdiv($valor, 604800);
        $dias = (int) (($valor % 604800) / 86400);
        $horas = (int) (($valor % 86400) / 3600);
        $minutos = (int) (($valor % 3600) / 60);
        $segundos = (int) ($valor % 60);
    ?>
    <section>
        <h2>Calculadora de Tempo</h2>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="segun">Qual é o total de segundos?</label>
            <input type="number" name="segun" id="segun" value="<?= $valor ?>" min="0">

            <input type="submit" value="Calcular">
        </form>
    </section>

    <main>
        <h2>Resultado do Reajuste</h2>
        <p>Analisando o valor que você digitou, <?= number_format($valor, 0, ".", ".") ?> segundos equivalem a um total de:</p>
        <ul>
            <li><?= $semanas ?> Semanas</li>
            <li><?= $dias ?> Dias</li>
            <li><?= $horas ?> Horas</li>
            <li><?= $minutos ?> Minutos</li>
            <li><?= $segundos ?> Segundos</li>
        </ul>
    </main>
</body>
</html>