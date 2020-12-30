<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $friends = array("Kevin", 1, "false", "Karen", "Oscar", "Jim");
        echo $friends[2];
        $friends[2] = "Angela";
        echo $friends[2];
        echo count($friends);
        echo $friends;
    ?>
</body>
</html>