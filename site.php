<html>
    <head>
        <title>Hello</title>
    </head>
    <body>
        <form action="site.php" method="get">
            Name:<input type="text" name="username">
            <br>
            Age: <input type="number" name="age">
            <input type="submit">
        </form>
        <br>
        Your name is <?php echo $_GET["username"];?>
        <br> 
        Your name is <?php echo $_GET["age"]; ?>
    </body>
</html>