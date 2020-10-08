<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        span {
            color: red;
        }
    </style>
</head>
<body>
    <?php
        // print_r($_GET['username'] . " --> " . $_GET['password']);
        // print_r($_POST['username'] . " --> " . $_POST['password']);

        if ($_POST['username'] == "A" and $_POST['password'] == "B")
            print("Hello, " . $_POST['username'] . "!");
        else
            print("<span>Incorrect username or password.</span>")
    ?>
</body>
</html>