<?php
    $v1 = $_REQUEST["v1"] ?? 0;
    $v2 = $_REQUEST["v2"] ?? 0;

    $p1 = $_REQUEST["p1"] ?? 1;
    $p2 = $_REQUEST["p2"] ?? 1;

?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d009</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
        // Calcula a média simples
        $media_simples = ($v1 + $v2) / 2;

        // Calcula a média ponderada
        $media_ponderada = (($v1 * $p1) + ($v2 * $p2)) / ($p1 + $p2);
    ?>
    <main>
        <h1>Informe um Número</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="v1">1° Valor</label>
            <input type="number" name="v1" id="v1" value="<?= $v1 ?>" required>
            <label for="p1">1° Peso</label>
            <input type="number" name="p1" id="p1" value="<?= $p1 ?>" required>

            <label for="v2">2° Valor</label>
            <input type="number" name="v2" id="v2" value="<?= $v2 ?>" required>
            <label for="p2">2° Peso</label>
            <input type="number" name="p2" id="p2" value="<?= $p2 ?>" required>

            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <h2>Calculo das Médias</h2>
        <?php
            echo "<p>Analisando os valores $v1 e $v2:</p>";
            echo "<ul>";
                echo "<li><p>A média Aritmética Simples entre os valores é igual a " .  number_format($media_simples, 2, ",", ".") . "</p></li>";
                echo "<li><p>A média Aritmética Ponderada com pesos $p1 e $p2 é igual a " .  number_format($media_ponderada, 2, ",", ".") . "</p></li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>