<?php
    $num = $_GET["num"] ?? 0;
    $antecessor = $num - 1;
    $sucessor = $num + 1;
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d001</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <section>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?= $num ?>" required>

            <input type="submit" value="Enviar">
        </form>
    </section>

    <section>
        <h1>Resultado Final</h1>
        <?php
            echo "<p>O número escolhido foi <strong>$num</strong></p>";
            echo "<p>O seu antecessor é $antecessor</p>";
            echo "<p>O seu sucessor é $sucessor</p>";
        ?>
    </section>
</body>
</html>