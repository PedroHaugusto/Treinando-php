<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    </header>
    <main>
        <h1>Conversor de moedas v1.0</h1>
        <?php
        $numero = $_GET["numero"];
        $dolar = 5.22;
        $converter = $numero / $dolar;

        echo "Seus R$ $numero equivalem a U$ $converter";


        // R$ 1,00 ÷ 5,22 = U$ 0,191;
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>