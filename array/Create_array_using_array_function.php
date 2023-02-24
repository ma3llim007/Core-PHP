<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Array Using Array Function</title>
</head>
<body>
    <h2>Create Array Using Array Function</h2>
    <br> <hr>
    <h1>Array Function</h1>
    <p>Array() Function Is Used To create array <br>
    syntax:- <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$array_name = array("value1","value2","value3",.......);
</p>
<br><hr>
<?php
    $names = array("mohd","khaja","sameer","fahad","salman");
    for ($i = 0; $i < 5; $i++):
        echo "<p>$names[$i]<br /></p>";
    endfor;
?>
</body>
</html>