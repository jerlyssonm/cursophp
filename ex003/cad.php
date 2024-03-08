<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Ola!</h1>
    </header>

    <main>
        <?php
            $nome = $_GET["nome"] ?? "sem nome";
            if (strlen($nome) == 0) 
                $nome = "nome nao digitado";

            $sobrenome = $_GET["snome"] ?? "sem sobrenome";
            if (strlen($sobrenome) == 0)
                $sobrenome = "sobrenome nao digitado";

            echo "Prazer eu sou o <strong>$nome $sobrenome</strong>, e gostaria de trabalhar com ti novamente";
        ?>
        <p>
            <a href="javascript:history.go(-1)">Voltar para Pagina anterior</a>
        </p>
    </main>
</body>
</html>