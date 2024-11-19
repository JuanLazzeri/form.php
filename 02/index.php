<!DOCTYPE html>
<html lang="ptp-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de PHP</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php
        Date_default_timezone_set("America/Sao_Paulo");
        //GMT-3
        echo "Hoje é dia ". date('d/m/Y.');
        echo ' Horário local: '. date('G:i');
    ?>
</body>
</html>
