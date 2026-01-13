<?php
    $ano_atual = date("Y");

    $ano_nasc = $_REQUEST["ano_nasc"] ?? $ano_atual;

    $ano = $_REQUEST["ano"] ?? $ano_atual;

?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d010</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
        // Calcula a idade
        $idade = $ano - $ano_nasc;
    ?>
    <main>
        <h1>Informe um Número</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="ano_nasc">Em que ano você nasceu?</label>
            <input type="number" name="ano_nasc" id="ano_nasc" value="<?= $ano_nasc ?>" min="1900" max="<?= $ano_atual ?>" required>

            <label for="ano">Quer saber sua idade em qual ano? (atualmente estamos em <?= $ano_atual ?>)</label>
            <input type="number" name="ano" id="ano" value="<?= $ano ?>" min="1900" required>

            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?= $ano_nasc ?> vai ter <strong><?= $idade ?> anos</strong> em <?= $ano ?></p>
    </section>
</body>
</html>