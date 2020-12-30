<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <?php

        class Chef{
            function makeChicken(){
                echo "The checf makes chicken <br>";
            }
            function makeSalad(){
                echo "The chef makes salad <br>";
            }
            function makeSpecialDish(){
                echo "The chef makes bbq ribs <br>";
            }
        }

        class ItalianChef extends Chef {
            function makePasta(){
                echo "Make Pasta<br>";
            }

            // Function Overriding
            function makeSpecialDish(){
                echo "The Chef maked Chikecn Pam<br>";
            }
        }

        $chef = new Chef();
        $chef->makeChicken();

        $itanlianchef = new ItalianChef();
        $itanlianchef->makeChicken();
        $itanlianchef->makePasta();

        $chef->makeSpecialDish();
        $itanlianchef->makeSpecialDish();
    ?>
</body>
</html>