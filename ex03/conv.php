<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Updated Value</h1>
    </header>
   <main>
    <?php 
        $value = $_GET ["money"];
        $newvalue = $value *5.80;
        echo "With US$  ". number_format($value, 2, ',', '.')." you'll have R$  ". number_format($newvalue, 2, ',', '.') . ".<br><br>";
        echo "<strong>Fixed quote of 5.80.</strong>";
    ?>
    </main>
</body>
</html>