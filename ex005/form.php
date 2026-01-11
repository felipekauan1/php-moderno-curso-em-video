<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex005</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Superglobais no PHP</h1>
    </header>    
    <main>
        <form action="index.php?idade=20&peso=68.9" method="post">
            <label for="usuario">Usuário:</label>
            <input type="text" name="usuario" id="usuario" required>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required>

            <input type="submit" value="Enviar">
        </form>
    </main>
</body>
</html>