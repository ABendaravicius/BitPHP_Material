<?php
    // Create array from given number using a for() loop
    $arr = array();
    $number = 15; // < change this to user input later ! ! !
    for ($i = 1; $i <= $number; $i++){
        array_push($arr,$i);
    }
    print_r($arr);

    // Generate all values for the multiplication table
    for ($i = 0; $i < count($arr); $i++) { // Each outter for() loop iteration generates a table row element
        for($j = 0; $j < count($arr); $j++) {
            $value = $arr[$i] * $arr[$j]; // Each value is placed into a table data element
            echo $value . ", ";
        }
        echo "\n";
    }

    // Use css to enable row/column hover for better UX
?>