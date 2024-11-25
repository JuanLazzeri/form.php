<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Hi! Here's the result!</h1>
    </header>
    <main>
    <?php 
        $nome = $_GET["nome"] ?? "null";
        $s = $_GET["sobrenome"] ?? "null";
        echo "It's a pleasure to meet you, <strong>$nome $s</strong>!";   
    ?>
    <p><a href="javascript:history.go(-1)">back</a></p>
    </main>
</body>
</html>