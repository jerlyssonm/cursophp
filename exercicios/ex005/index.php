<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Retroativo</title>
    <link rel="stylesheet" href="stile.css">
</head>
<body>
    <main>
        <?php 
            $valor1 = $_GET["v1"] ?? 0;
            $valor2 = $_GET["v2"] ?? 0;

            $soma = $valor1 + $valor2;
        ?>
        <h1>Formulario Retroativo</h1>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" value="<?=$valor1?>">
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" value="<?=$valor2?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section>
        <h2>Seu Resultado:</h2>
        <?php 
            echo "Seu resultado é <strong>$soma</strong>";
        ?>
    </section>
</body>
</html>