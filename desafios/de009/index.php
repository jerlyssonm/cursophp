<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 09- Medias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET["v1"] ?? 0;
        $peso1 = $_GET["p1"] ?? 1;

        $valor2 = $_GET["v2"] ?? 0;
        $peso2 = $_GET["p2"] ?? 1;
    ?>
    <main>
        <h1>Medias Aritimedicas</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="v1">1° Valor</label>
            <input type="number" name="v1" id="v1" step="0.05" min="0" max="10" value="0">
            <label for="p1">1° Peso</label>
            <input type="number" name="p1" id="p1" min="1" max="5" value="1">
            <label for="v2">2° Valor</label>
            <input type="number" name="v2" id="v2"step="0.05" min="0" max="10" value="0">
            <label for="p2">2° Peso</label>
            <input type="number" name="p2" id="p2" min="1" max="5" value="1">
            <input type="submit" value="Calcular Medias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Medias</h2>
        <?php 
            $totalV = $valor1 + $valor2;
            $totalP = $peso1 + $peso2;

            $mediaS = $totalV / 2;       
            
            $valor1P = $valor1 * $peso1;
            $valor2P = $valor2 * $peso2;

            $mediaP = ($valor1P + $valor2P) / $totalP;

            echo "<p>Analisando os valores $valor1 e $valor2:</p>";
            echo "<ul>";
            echo "<li>A <strong> Media Aritimetica Simples</strong> entre os valores é igual a ".number_format($mediaS,2,",")."</li>";
            echo "<li>A <strong> Media Aritimetica Ponderada</strong> com pesos 1 a 5 é igual a ".number_format($mediaP,2,",")."</li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>