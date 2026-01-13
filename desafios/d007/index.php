<?php
    $salario_min = 1621;
    $salario = $_GET["sala"] ?? 3300;

?><!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d007</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER["PHP_SELF"] ?>">
            <label for="sala">Salário R$</label>
            <input type="number" name="sala" id="sala" value="<?= $salario ?>" step="0.01" required>

            <p>Considerando o salário mínimo de <strong>R$ 1.621,00</strong></p>

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h1>Resultado Final</h1>
        <?php
            $int = intdiv($salario, $salario_min);

            $resto = $salario % $salario_min;

            echo "<p>Quem recebe um salário de R$ " .  number_format($salario, 2, ",", ".") . " ganha " . $int . " Salários Mínimos + R$ " . number_format($resto, 2, ",", ".") . "</p>";
        ?>
    </section>
</body>
</html>