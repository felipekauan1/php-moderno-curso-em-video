<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex002</title>
    <style>
        * { 
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100dvh;
        }
    </style>
</head>
<body>
    <h1>
        <?php
            date_default_timezone_set("America/Sao_Paulo");
            echo "A data de hoje é " . date("d/m/y");
            echo " e a hora atual é " . date("G:i:s");
        ?>
    </h1>
</body>
</html>