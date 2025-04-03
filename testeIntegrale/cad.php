<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Processo Seletivo</title>
    <!--arquivo css-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>Dados Enviados!</h1>
    </header>

    <main>
        <?php
            $nome = $_GET["nome"];

            echo "<p>Olá <strong>$nome</strong>, recebemos seu formulário! Seja bem vindo(a), a nossa página.</p>";
        ?>
        <!--link para retornar a página inicial-->
        <p><a href="javascript:history.go(-1)">Voltar para Página Inicial</a></p>
    </main>
</body>
</html>