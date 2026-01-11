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
    <section>
        <form action="cad.php" method="GET">
            <label for="id_nome">Nome:</label>
            <input type="text" name="nome" id="id_nome" required>
            
            <label for="id_sobrenome">Sobrenome:</label>
            <input type="text" name="sobrenome" id="id_sobrenome" required>

            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>