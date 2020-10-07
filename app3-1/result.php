<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        print('<h1>Congratulations! You have just received: <span style="color: green">' . $_GET['amount'] .'</span>€!</h1>');
    ?>
    <a href="index.php"><button>Get MORE!</button></a>
    
</body>
</html>