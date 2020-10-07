<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $initial_num = 50;
        $initial_num %= 10; // sets initial_num equal to modal of 50 / <number>

        print($initial_num == 0 ? "Nera liekanos" : "Yra liekana: $initial_num");
    ?>
</body>
</html>