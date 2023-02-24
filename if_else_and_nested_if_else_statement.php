<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Else And Nested If Else Statement</title>
</head>
<body>
    <?php
        if (10>2):
            echo "<h1>Condition Is True <br /></h1>";
        else:
            echo "<h1>Condition Is False <br /></h1>";
        endif;
        echo "<h1>Rest Of The Code</h1>";
    ?>
    <br> <hr>
    <h3>Nested If Else Statement</h3>
    <p>In Nested If Else Statement, An Entire if else construct is written within either the body of the if statemnet or the body of an else statement</p>
    <?php
        if(10>2):
            echo "<h1>Main Condition Is True <br /></h1>";
            if(10>5):
                echo "<h1>Nested Condition Is True <br /></h1>";
            else:
                echo "<h1>Nested Condition Is False <br /></h1>";
            endif;
        else:
            echo "<h1>Main Condition Is False <br /></h1>";
        endif;
        echo "<h1>Rest Of The Code <br /></h1>";
    ?>
</body>
</html>