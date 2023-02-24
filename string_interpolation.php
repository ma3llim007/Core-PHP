<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Interpolation</title>
</head>
<body>
    <h1>String Interpolation is a quick shortcut. allowing to pop the value of a variable into a quoted string.</h1>
    <?php
    $value=10;
    $name = "Mohd";
    echo "Example:- Value is: $value <br>";
    echo "$name Sameer \$good";

    ?>
    <br>
    <hr>
    <h1>RULES</h1>
    <ol>
        <li>Surround the variable name with space</li>
        <li>Do Not Use Single Quotation Mark - When You Use Single Quotation marks, PHP does not apply string Interpolation</li>
    </ol>
</body>
</html>