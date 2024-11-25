<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Randomizing</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1>Random Numbers</h1>
    </header>
    <section>
        <h2>Click below to generate a number</h2>
        <p>A number beetween 0 and 100 will be generated</p>
        <?php
            $n = mt_rand(1,100); 
            echo ("The random number is <strong>$n</strong>");
        ?>
        <input type="submit" value = "Refresh" onclick="history.go(0)" />
    </section>
</body>
</html>