<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $luckynumbers = array(4,8,14,23,42);
        for($i =1; $i<count($luckynumbers); $i++){
            echo "$luckynumbers[$i] <br>";
        }
    ?>
</body>
</html>