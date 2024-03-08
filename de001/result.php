<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado</h1>
        <?php 
            $result = $_GET["entrada"];
            $ant = $result - 1;
            $suc = $result + 1;
            echo "O numero escolhido foi: $result\n";
            echo "O seu antecessor é $ant \n";
            echo "O seu sucessor é $suc"
        ?>
        <p>
            <a href="javascript:history.go(-1)">Voltar</a>
        </p>
    </main>
</body>
</html>