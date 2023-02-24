<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Increment And Decrement Operators</title>
</head>
<body>
    <h1>Increment And Decrement Operators</h1>
    <table border="1" cellpadding="15">
        <tr>
            <th>Operators</th>
            <th>Meaing</th>
        </tr>
        <tr>
            <td>++$a</td>
            <td>Increment $a by 1, then use the new value of $a</td>
        </tr>
        <tr>
            <td>$a++</td>
            <td>Use Value of $a, then Increment $a by 1</td>
        </tr>
        <tr>
            <td>--$b</td>
            <td>Decrement $b by 1, then use the new value of $b</td>
        </tr>
        <tr>
            <td>$b--</td>
            <td>Use The Current Value Of $b, then decrement by 1</td>
        </tr>
    </table>
    <?php
        $a = 3;
        $b = 4;
        echo "<br />" . $a++;
    ?>
</body>
</html>