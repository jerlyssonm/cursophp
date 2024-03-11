<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 04</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Cotação Tempo real</h1>
        <form action="calc.php" method="get">
            <label for="saldo">Quanto você quer converter:</label>
            <input type="number" name="saldo" id="isaldo" step="0.05" min=0.05 value="1">
            <input type="submit" value="Calcular">
        </form>
    </main>
</body>
</html>