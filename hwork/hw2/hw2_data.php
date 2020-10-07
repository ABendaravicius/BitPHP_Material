<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="output">
        <?php
        $weight = $_POST['weight'];
        $height = $_POST['height'] / 100;

        $bmi = $weight / ($height * $height);
        echo $bmi;
        ?>
    </div>
</body>

</html>