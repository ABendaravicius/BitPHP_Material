<?php
    $books = [
        "Jonas" => [7, 8, 6, 8, 9, 10, 7],
        "Petras" => [4, 5, 8, 6, 5, 7],
        "Ieva" => [9, 10, 10, 10, 9, 9],
        "Migle" => [8, 10, 9, 10, 9, 8]
    ];
    echo '---------------------------' . "\n";
    foreach($books as $student => $grades) {
        $sum = 0;
        foreach($grades as $grade) {
            $sum += $grade;
        }
        $num = count($grades);
        $avg = $sum / $num;
        echo $student . ' final grade for the subject is: ' . round($avg, 1) . "\n";
    }
    echo '---------------------------' . "\n";

    $keys = array_keys($books);

    for ($i = 0; $i < count($books); $i++) {
        $sum = 0;
        for ($j = 0; $j < count ($books[$keys[$i]]); $j++) {
            $sum += $books[$keys[$i]][$j];
        }
        $avg = $sum / count($books[$keys[$i]]);
        echo $keys[$i] . ' final grade for the subject is: ' . round($avg, 1) . "\n";
    }
    echo "\n";
?>