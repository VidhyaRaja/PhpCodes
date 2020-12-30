<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php /* This program also includes conects of "inclue */ ?>
    <?php include "header.html" ?>
    <p> Hello World </p>
    <h2><?php echo $title; ?></h2>
    <h4><?php echo $author; ?></h4>
    word count: <?php echo $wordcount; ?>
    <?php include "footer.html" ?>
</body>
</html>