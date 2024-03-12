<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 06</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Divisão</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="v1">Dividendo</label>
            <input type="number" name="v1" id="v1" value="0">
            <label for="v2">Divisor</label>
            <input type="number" name="v2" id="v2" min="1" value="1">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php 
            $dividendo = $_GET["v1"] ?? 0;
            $divisor = $_GET["v2"] ?? 1;

            $resultado = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;

        ?>
        <h2>Resultado</h2>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$resultado?></td>
            </tr>
        </table>
    </section>
</body>
</html>