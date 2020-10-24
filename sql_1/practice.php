<?php
    $servername = 'localhost';
    $username = 'root';
    $password = 'mysql';
    $dbname = 'phpdb';

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die('Connecton failed: ' . mysqli_connect_error());
    }

    echo 'Connected successfully<br><br>';

    $sql = 'select id as Nr, firstname as Vardas, lastname as Pavardė, pet as Gyvūnas from duomenys';
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)> 0) {
        echo '<table style="border-collapse: collapse; border-spacing: none">';
        echo '<thead>';
        $row = mysqli_fetch_assoc($result);
        foreach (array_keys($row) as $key) {
            echo '<th>' . $key . '</th>';
        }
        echo '</thead>';
        echo '<tr>';
        foreach ($row as $key => $value) {
            echo '<td style="border: 2px solid black; padding: 5px">' . $value . '</td>';
        }
        echo '</tr>';

        while($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
                for ($i = 0; $i < count($row); $i++) {
                    echo '<td style="border: 2px solid black; padding: 5px">';
                    echo $row[array_keys($row)[$i]];
                    echo '</td>';
                }
            echo '</tr>';
        }
        echo '</table>';
    } else {
        echo '.';
    }

    mysqli_close($conn);
?>