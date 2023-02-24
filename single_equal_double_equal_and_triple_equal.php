<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Equal Double And Triple Equal</title>
</head>
<body>
    <h1>Single Equal Double And Triple Equal</h1>
    <ol>Operators
        <li>=== TRUE if $a is equal to $b and they are of the same type</li>
        <li>== FALSE</li>
    </ol>
    <h3>EXAMPLE:-</h3>
    <?php
    $num1 = 10;
    $num2 = 10;
    if($num1 === $num2):
        echo "Number Is Equal";
    else:
        echo "Number Is Not Equal";
    endif;
    ?>
</body>
</html>