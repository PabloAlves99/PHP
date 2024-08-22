<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Tela de login</title>
</head>
<body>
    <header>
        <h1>
            Tela de login
        </h1>
    </header>
    <section>
        <form action="form_login.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="idnome">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" id="idsobrenome">
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>