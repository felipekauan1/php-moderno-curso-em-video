<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>d002</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php
            $min = 0;
            $max = 100;

            echo "<p>Gerando um número aleatório entre $min e $max...</p>";
            
            $num = mt_rand(0, 100);
            echo "<p>O valor gerado foi <strong>$num</strong></p>";
        ?>
    </main>
</body>
</html>