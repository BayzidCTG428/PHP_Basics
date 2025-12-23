<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $numlist = array(554, '57628', '<h6>Hello World</h6>', "<h6>Bayzid Simon</h6>");

        echo $numlist[0];
        echo $numlist[3];
        echo $numlist[1];
        echo $numlist[4];
        echo $numlist[2];

        print_r($numlist);

        echo "<pre>";
        print_r($numlist);
        echo "</pre>";
    ?>

    <?php
        $array = ["name" => "Simon", "age" => 22];
        print_r($array);

        echo "<pre>";
        print_r($array);
        echo "</pre>";

    ?>
</body>
</html>