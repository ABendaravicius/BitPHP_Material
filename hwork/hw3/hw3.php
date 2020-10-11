<?php
    echo '----------------' . "\n";
    // 1. Operacijos su masyvais
    // 1.1. Vienmatis masyvas
    
    // Initialization
    $oneD_arr = array('Tomas','Petras','Jonas','Ieva');

    // Return value at index
    echo 'Value at index 0: ' . $oneD_arr[0] . "\n" . "\n";

    // Assign value at selected index
    $oneD_arr[0] = 'Timas';
    echo 'New value at index 0: ' . $oneD_arr[0] . "\n" . "\n";

    // Add new element to the array
    array_push($oneD_arr, 'Migle');
    echo 'New value at new index 4: ' . $oneD_arr[4] . "\n" . "\n";

    // Return all elements of array
    // a) using print_r()
    echo print_r($oneD_arr) . "\n" . "\n";
    // b) using for() loop
    for ($i = 0; $i < count($oneD_arr); $i++) {
        echo $oneD_arr[$i] . "\n";
    }
    echo "\n";

    // Return number of elements in array
    echo 'Count: ' . count($oneD_arr) . "\n" . "\n";

    // Delete element(s) in array
    array_splice($oneD_arr, 1, 2); // deletes 2 elements starting at index 1 (2nd and 3rd elements deleted)

    // Sort elements in array
    sort($oneD_arr); // Default sort (asc)
    rsort($oneD_arr); // Reverse sort (desc)
    asort($oneD_arr); // Default sort that keeps index association
    arsort($oneD_arr); // Reverse sort that keeps index association

    // Add element to array at selected index
    array_splice($oneD_arr, 2, 0, 'Laurynas');

    // Return sum of elements in array
    $oneD_numArr = [1, 5, 7, 8, 12, 14];
    echo 'Sum: ' . array_sum($oneD_numArr) . "\n" . "\n"; // String values count as 0

    // Return min and max values in array
    echo 'Min: ' . min($oneD_numArr) . "\n";
    echo 'Max: ' . max($oneD_numArr) . "\n" . "\n";

?>