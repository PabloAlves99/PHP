<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login feito</title>
</head>
<body>
    <header>
        <h1>
            Login feito
        </h1>
    </header>
    <main>
        <?php
            $name = $_POST["nome"];
            $last_name = $_POST["sobrenome"];

            $username = strtolower($name."_".$last_name);

            echo "Olá $name $last_name. Seu usuário é: $username"
        ?>
    </main>
</body>
</html>