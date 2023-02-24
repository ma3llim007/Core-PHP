<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Double Arrow Operator</title>
</head>
<body>
<?php
    $names = array(1 => "mohd","khaja","sameer","fahad","salman");
    for ($i = 1; $i < 5; $i++):
        echo "<p>$names[$i]<br /></p>";
    endfor;
?>
</body>
</html>