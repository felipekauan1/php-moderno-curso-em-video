<?php
    $numero = $_GET["num"] ?? 64;

?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d008</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h1>Informe um Número</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?= $numero ?>" required>

            <input type="submit" value="Calcular Raizes">
        </form>
    </main>

    <section>
        <h1>Resultado Final</h1>
        <?php
            echo "<p>Analisando o <strong>número $numero</strong>, temos:</p>";

            $raiz_quadrada = sqrt($numero);
            $raiz_cubica = $numero ** (1/3);

            echo "<ul>";
            echo "<li>A Raiz Quadrada é <strong>" . number_format($raiz_quadrada, 3, ",", ".") . "</strong></li>";
            echo "<li>A Raiz cúbica é <strong>" . number_format($raiz_cubica, 3, ",", ".") . "</strong></li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>