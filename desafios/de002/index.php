<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <main>
        <h1>Gerando numeros Aleatorios</h1>
        <p>Gerando numero aleatorio entre 0 e 100</p>
        <?php
            $min = 0;
            $max = 100;
            $num = random_int($min, $max);
        
            echo "O valor gerado foi <strong>$num</strong>";
        ?>
        <button type="button" onclick="javascript:document.location.reload()"> Gerar Numero</button>
    </main>
</body>
</html>