<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form em Php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Apresente-se</h1>
    </header>
    <section>
        <form action="cad.php" method="get">
            <label for="nome">Nome</label> <br>
            <input type="text" name="nome" id="inome">
            <label for="snome">Sobrenome</label> <br>
            <input type="text" name="snome" id="isnome">
            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>