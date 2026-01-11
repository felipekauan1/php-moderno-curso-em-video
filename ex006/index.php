<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex006</title>
    <link rel="stylesheet" href="../ex005/style.css">
</head>
<body>
    <?php
        // Capturando dados do formulário retroalimentado
        $valor1 = $_GET["valor1"] ?? 0;
        $valor2 = $_GET["valor2"] ?? 0;
    ?>
    <header>
        <h1>Formulários Retroalimentados</h1>
    </header>    
    <main>
        <form action="<?= $_SERVER["PHP_SELF"] ?>">
            <label for="valor1">Valor 1:</label>
            <input type="number" name="valor1" id="valor1" value="<?= $valor1 ?>" required>

            <label for="valor2">Valor 2:</label>
            <input type="number" name="valor2" id="valor2" value="<?= $valor2 ?>" required>

            <input type="submit" value="Somar">
        </form>   
    </main>

    <section>
        <h2>Resultado da Soma</h2>
        <?php
            $resultado = $valor1 + $valor2;
            echo "<h2>A soma entre $valor1 e $valor2 é $resultado</h2>"
        ?>
    </section>
</body>
</html>