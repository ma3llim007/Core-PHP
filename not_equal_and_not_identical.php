<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Not Equal And Not Identical</title>
</head>
<body>
    <ol>
        <li>!= True 1 ex:- 5!=2</li>
        <li><> TRUE if $a is not equal to $b ex:-$a<>$b</li>
        <li>!== TRUE if $a is not equal to $b, or they are not of the same type ex:- $a!==$b</li>
    </ol>
    <br> <hr>
    <?php
        $num1 = 10;
        $num2 = "10";
        echo $num1 !== $num2;
    ?>
</body>
</html>