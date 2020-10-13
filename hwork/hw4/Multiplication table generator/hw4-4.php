<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    // Create array from given number using a for() loop
    $arr = array();
    $number = $_GET['number'];
    for ($i = 1; $i <= $number; $i++){
        array_push($arr,$i);
    }
    print '<a href="hw4-4-index.php"><button>< Go back</button></a>';
    print "<h1>Multiplication table of " . $number . "</h1>";

    // Generate all values for the multiplication table
    print "<table><thead><tr><th></th>"; // Table start
    for ($i = 0; $i < count($arr); $i++) {
        print "<th>" . $arr[$i] . "</th>";
    }
    print "</tr></thead>";
    print "<tbody>";
    for ($i = 0; $i < count($arr); $i++) { // Each outter for() loop iteration generates a table row element
        print "<tr>";
        print '<th scope="row">' . $arr[$i] . "</th>";
        for($j = 0; $j < count($arr); $j++) {
            // $value = $arr[$i] * $arr[$j]; // Each value is placed into a table data element
            print "<td>" . $arr[$i] * $arr[$j] . "</td>";
        }
    }
    print "</tbody></table>"; // Table end
?>
</body>
</html>