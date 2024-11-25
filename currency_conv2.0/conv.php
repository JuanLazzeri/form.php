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
        $quote = 5.17;
        $value = $_GET ["money"] ?? 0;
        $newvalue = $value * $quote;
        $default = numfmt_create("en_US", NumberFormatter::CURRENCY);
        echo "With " . numfmt_format_currency($default, $value, "USD"). ", you'll have <strong>" . numfmt_format_currency($default, $newvalue, "BRL")."</strong>";
    ?>
    </main>
</body>
</html>