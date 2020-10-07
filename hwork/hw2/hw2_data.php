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

        $bmi = $weight / ($height ** 2);
        echo 'Your BMI is: ' . '<strong>' . round($bmi, 2) . '</strong>';
        echo '<br>';
        echo 'According to your BMI, you are ';

        if ($bmi < 18.5) {
            echo '<strong>Underweight</strong>.';
        } elseif ($bmi >= 18.5 && $bmi < 24.9) {
            echo 'of <strong>Normal Weight</strong>.';
        } elseif ($bmi >= 25 && $bmi < 29.9) {
            echo '<strong>Overweight</strong>.';
        } elseif ($bmi >= 30) {
            echo '<strong>Obese</strong>.';
        } else {
            echo '<strong>STUPID. Entering two values is not THAT HARD!</strong>';
        }
        ?>
        <br>
        <br>
        <a href="hw2.php"><button>Back to Calculator</button></a>
    </div>
</body>

</html>