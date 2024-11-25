<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1><strong>Result below</strong></h1>
    </header>
    <main>
        <?php 
            $n = $_GET ["number"] ?? 0;
            $p = $n + 1;
            $m = $n -1;
            echo ("The number chosen was $n<br>");
            echo ("Its <strong>predecessor</strong> is $m <br>");
            echo ("Its <strong>sucessor</strong> is $p <br>");
        ?>
         <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>