<?php
    $num_real = $_REQUEST["n_real"] ?? 0;
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d005</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <section>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
                <label for="n_real">Número Real:</label>
                <input type="number" name="n_real" id="n_real" value="<?= $num_real ?>" step="0.001" required>

                <input type="submit" value="Analisar">
            </form>
        </section>

        <section>
            <h1>Analisador de Número Real</h1>
            <?php
                echo "Analisando o número " . number_format($num_real, 3, ",", ".");

                $int = (int) $num_real;
                $fra = $num_real - $int;

                echo "<p>A parte inteira do número é " . number_format($int, 0, ",", ".") . "</p>";
                echo "<p>A parte fracionária do número é " . number_format($fra, 3, ",", ".") . "</p>";
            ?>
        </section>
    </main>
</body>
</html>