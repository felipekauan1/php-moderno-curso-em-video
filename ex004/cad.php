
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex004</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Apresente-se para nós</h1>
    </header>    
    <main>
        <?php
            $nome = isset($_GET["nome"])?$_GET["nome"]:""; // verficação com operador ternário
            $sobrenome = $_GET["sobrenome"] ?? ""; // verificação com operador de coalescência

            echo "Olá, $nome $sobrenome!";

        ?>

        <p><a href="index.php">Voltar</a></p>
    </main>
</body>
</html>