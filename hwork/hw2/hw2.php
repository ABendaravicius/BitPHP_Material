<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>BMI Calculator</title>
</head>
<body>
    <form action="hw2_data.php" method="POST">
        <label for="weight">Enter your weight (kg):</label>
        <input type="number" name="weight" id="weight" min="1"><br><br>
        <label for="height">Enter your height (cm):</label>
        <input type="number" name="height" id="height" min="1">
        <input type="submit" value="Calculate my BMI" id="submit">
    </form>    
</body>
</html>