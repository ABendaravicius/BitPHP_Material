<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP paskaita 2</title>
</head>
<body>
    <?php 
        // 1. Kintamieji
        $myname = "Arnas";
        $myage = 25;
        $older = 1;

        print($myname . "<br>"); // PHP kalboje String concatanation vykdomas su '.'
        print($myage + $older); // Skaičiai sudedami su '+'

        // 2. Interpolation
        $salary = 1000;
        $name = "Arnas";

        print("<br>");
        print("Darbuotojas $name, uzdirbo $salary");

        // 3. Printing
        print("<br>");
        var_dump($myage);
    ?>
</body>
</html>