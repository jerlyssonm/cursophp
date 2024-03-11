<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Seu saldo convertido para o dolar</h1>
        <?php 
            $ini = date("m-d-Y",strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$ini.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            $dados = json_decode(file_get_contents($url), true);

            $cotacaoAtual = $dados["value"][0]["cotacaoCompra"];
            $cotacaoAtual = number_format($cotacaoAtual,2,".",",");

            $saldo = $_GET["saldo"];
            $saldo = number_format($saldo,2,".",",");

            $total =  $saldo / $cotacaoAtual;
            $total = number_format($total,2,".",",");

            echo "Dolar hoje está <strong>R$:$cotacaoAtual</strong> e seu saldo é <strong>$saldo</strong> <br>";
            echo "Seu saldo em Dolar vai ficar <strong>$total<strong>";
        ?>
        <p>
            <a href="javascript:history.go(-1)">Voltar</a>
        </p>
    </main>
</body>
</html>