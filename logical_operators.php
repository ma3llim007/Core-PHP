<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operators</title>
</head>
<body>
    <h2>Logical Operators</h2>
    <table border="1" cellpadding="15px">
        <tr>
            <th>Operator</th>
            <th>Meaning</th>
            <th>Example</th>
            <th>Result</th>
        </tr>
        <tr>
            <td>&&</td>
            <td>Logical AND</td>
            <td> (5<2)&&(5>3) </td>
            <td> FALSE</td>
        </tr>
        <tr>
            <td>||</td>
            <td>Logical OR</td>
            <td> (5<2)||(5>3) </td>
            <td> TRUE</td>
        </tr>
        <tr>
            <td>!</td>
            <td>Logical NOT</td>
            <td> !(5<2) </td>
            <td> TRUE</td>
        </tr>
        <tr>
            <td>And</td>
            <td>Logical AND</td>
            <td> (5<2)and(5>3) </td>
            <td> FALSE</td>
        </tr>
        <tr>
            <td>OR</td>
            <td>Logical OR</td>
            <td> (5<2)or(5>3) </td>
            <td> TRUE</td>
        </tr>
        <tr>
            <td>XOR</td>
            <td>Exclusive OR</td>
            <td> (5<2)xor(5>3) </td>
            <td> TRUE</td>
        </tr>
    </table>
    <br> <hr>
    <?php
        if ((5>2) && (5>3)):
            echo "<h1>Condition Is True</h1>";
        
        else:
            echo "<h1>Condition Is False</h1>";
        endif;
    ?>
</body>
</html>