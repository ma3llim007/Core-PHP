<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constant</title>
</head>
<body>
    <h1>Constant</h1>
    <p>Whose value can't be modified. <br>
    define() function is used to create a constant. <br>
    syntax:- <br>
        define("constant_variable", Value, case-insensitive) <br>
    EX <br>
    define("pi",3.141592);
    </p>
    <br> <hr>
    <h1>RULES</h1>
    <ol>
        <li>No need to start constant variable name with $ sign</li>
        <li>Name only starts with a letter and an underscore( _ )</li>
        <li>variable name cannot start with a number</li>
        <li>it is case sensitive which implies that the variable num is lowercase is different from variable NUM in uppercase. But we can make it case insensitive</li>
        <li>constants are automatically global and can be used across the entire script</li>
        <li>Can't use pre-defind constant name Eg:- <strong>PHP_VERSION, PHP_OS</strong></li>
        <li>Can't Use Reserved Keywords. e.g. else,if-else</li>
    </ol>
    <br> <hr>
    <h2>EXAMPLE</h2>
    <?php
        define ("pi",3.1545);
        echo pi;
    ?>
</body>
</html>