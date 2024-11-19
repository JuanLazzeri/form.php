<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testes</title>
    <style>
       body {
        background-color: black;
        color: lightblue;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
       }
    </style>
</head>
<body>
    <h1>TeST.php</h1>
<?php 
    date_default_timezone_set("America/Sao_Paulo");
    $name = "Juan";
    $name2 = "Pablo";
    $midname = "Lazzeri";
    $sname = "Fernandes";
    $aka = "Juj";
    $aka2 = "Escobar";
    $age = 20;
    $country = "Brasil";
    echo "Olá! \u{1F642} <br> Me chamo $name $sname! Tenho $age anos e moro no $country.<br>Na verdade, meu nome completo é $name $name2 $midname $sname mas pode me chamar de $aka ou $aka2.<br>Hoje é dia ". date('d/m/Y');
    echo "<br>Horário local " . date('G:i');
?>
    <?php ?>
</body>
</html>