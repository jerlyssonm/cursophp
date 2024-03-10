<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Seu Resultado</h1>
        <p>Coversão feita de uma <strong>cotação fixa de 5,51</strong>, definida direto no codigo.</p>
        <?php
            $entrada = $_GET["moeda"] ?? 1;
            $moeda = $entrada / 5.51;
            $moeda = number_format($moeda,2,".",",");
            echo "Com seu valor voce terá <strong>$$moeda</strong>";
        ?>
        <p>
            <a href="javascript:history.go(-1)">Voltar</a>
        </p>
    </main>
</body>
</html>