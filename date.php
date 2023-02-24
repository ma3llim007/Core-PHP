<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>
<body>
    <form method="post">
        <input type="date" name="date" id="date" value="<?php echo date('d-m-y'); ?>">
        <input type="submit" value="Submit">
    </form>
    <?php
        $new_date = date("d-m-y", strtotime($_REQUEST['date']));
        echo $new_date;
    ?>
</body>
</html>