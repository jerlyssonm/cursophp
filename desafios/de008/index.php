<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>desafio 08</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $num = $_GET["num"] ?? 0;

        $raizQ = sqrt($num);
        $raizC = $num ** (1/3);
    ?>
    <main>
        <h1>Desafio 08 - raizes</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="num">Numero</label>
            <input type="number" name="num" id="num" min="1">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>
    <section>
        <h2>Resultado da Raizes</h2>
        <p>Analizando o <strong>numero <?=$num?></strong> temos</p>
        <p>A raiz quadrada é: <strong><?=number_format($raizQ,3,",")?></strong></p>
        <p>A raiz Cubica é: <strong><?=number_format($raizC,3,",")?></strong></p>
    </section>
</body>
</html>