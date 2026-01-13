<?php
    $dividendo = $_REQUEST["dividendo"] ?? 1;
    $divisor = $_REQUEST["divisor"] ?? 1;

    $quociente = (int) ($dividendo / $divisor);

    $resto = $dividendo % $divisor;

?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d006</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <section>
            <h1>Anatomia de uma Visão</h1>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
                <label for="dividendo">Dividendo:</label>
                <input type="number" name="dividendo" id="dividendo" value="<?= $dividendo ?>" min="0" required>

                <label for="dividendo">Divisor:</label>
                <input type="number" name="divisor" id="divisor" value="<?= $divisor ?>" min="1" required>

                <input type="submit" value="Analisar">
            </form>
        </section>

        <section>
            <h1>Estrutura da Divisão</h1>
            <table class="divisao">
                <tr>
                    <td><?= $dividendo ?></td>
                    <td><?= $divisor ?></td>
                </tr>
                <tr>
                    <td><?= $resto ?></td>
                    <td><?= $quociente ?></td>
                </tr>
            </table>
        </section>

        <section>
            <?php
                echo "<ul>";
                    echo "<li>Dividendo: $dividendo</li>";
                    echo "<li>Divisor: $divisor</li>";
                    echo "<li>Quociente: $quociente</li>";
                    echo "<li>Resto: $resto</li>";
                echo "</ul>";
            ?>
        </section>
    </main>
</body>
</html>