<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // We are using variables
        //" " for any string
        //Nothing for numbers

        $name = "bayzid@";
        $number = 882;
        $extension = "gmail.com<br>";
        $inline = "<h1>Hello World</h1>"; //HTML tags can be written inside variables.
    ?>

    <?php
        //The example shows seperate variables one after another
        echo $name, $number, $extension;
    ?>

    <?php
        //The exapmle shows how to concatanate
        echo $name.$number.$extension;

        //The exapmle shows how to concatanate with spaces
        echo " ".$name." ".$number." ".$extension;
    ?>

    <?php
        //The exapmle shows how to concatanate
        echo $inline;
    ?>
</body>
</html>