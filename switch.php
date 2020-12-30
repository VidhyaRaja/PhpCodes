<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="switch.php" method="POST">
    <input type="text" name="grade">
        <input type="submit">
    </form>
    <?php 
    $grade=$_POST["grade"];
    switch($grade){
        case "A":
            echo "You did amazing!";
            break;
        default:
            echo "OK!";
    }
    ?>
</body>
</html>