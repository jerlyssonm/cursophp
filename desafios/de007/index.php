<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 07</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php    
        $salBase = 1412;
        $sal = $_GET["salario"] ?? 0;

        $salarios = intdiv($sal, $salBase);
        $resto = number_format($sal % $salBase,2,",",".");
    ?>
    <main>
        <h1>Calculando Salario</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>">
            <label for="salario">Salario (R$)</label>
            <input type="number" name="salario" id="salario">
            <p>Considerando o salario minimo de <strong><?="R$".number_format($salBase,2,",",".").""?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            echo "<p>Quem recebe um salario de R$".number_format($sal,2,",",".")." ganha <strong>$salarios salarios minimos</strong> + R$$resto</p>";
        ?>
    </section>
</body>
</html>