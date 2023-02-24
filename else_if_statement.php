<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Else If Statement</title>
</head>
<body>
    <?php
    $price = 50;
    if ($price > 40 ):
        echo "If Condition Is True <br />";
    elseif ($price > 30 ):
        echo "1st Else If Condition Is True <br />";
    elseif ($price > 20 ):
        echo "2nd Else If Condition Is True <br />";
    else:
        echo "All Condition Is False <br />";
    endif;
    echo "Rest Of The Code";
    ?>
</body>
</html>