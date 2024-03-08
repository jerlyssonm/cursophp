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
            if($result){
                $ant = $result - 1;
                $suc = $result + 1;
            } else {
                $result = 0;
                $ant = $result - 1;
                $suc = $result + 1;
            }                
            echo "O numero escolhido foi: <strong>$result </strong>";
         ?> <br>
        <?php echo "O seu antecessor é: <strong>$ant </strong> "?> <br>
        <?php echo "O seu sucessor é: <strong>$suc </strong>"?>
        <p>
            <a href="javascript:history.go(-1)">Voltar</a>
        </p>
    </main>
</body>
</html>