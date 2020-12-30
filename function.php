<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php 
        function sayHi($name, $age){
            echo "hello $name, you are $age<br>";
            return 5;
        }
        sayHi("Mike",40);
        sayHi("Dave",45);
        sayHi("Oscar",80);
        $isMale = true;
        if ($isMale){
            echo "you are male";
        }elseif($isMale && false){
            echo "blah";
        }else{
            echo "kfn";
        }
    ?>
</body>
</html>