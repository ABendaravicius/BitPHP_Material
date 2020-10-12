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

    #####################################################################################
    echo '----------------' . "\n";
    // 1.2. Asociatyvus masyvas

    // Initialization
    $assoc_arr = array('p1' => 'Tomas','p2' => 'Petras','p3' => 'Jonas','p4' => 'Ieva');

    // Return value of selected key
    echo 'Value of key p1: ' . $assoc_arr['p1'] . "\n" . "\n";

    // Assign value of selected key
    $assoc_arr['p1'] = 'Timas';
    echo 'New value of key p1: ' . $assoc_arr['p1'] . "\n" . "\n";

    // Add new element to the array
    // a) using array_merge
    $assoc_arr = array_merge($assoc_arr, ['p5' => 'Migle']); //merging current array with new array
    // $assoc_arr = array_merge($assoc_arr, array('p5' => 'Migle'));
    // b) assigning to new key
    $assoc_arr['p6'] = 'Laurynas'; // Assigning value to new key

    // Return all elements of array
    // a) using print_r()
    echo print_r($assoc_arr) . "\n";
    // b) using for() loop
    $keys = array_keys($assoc_arr);
    for ($i = 0; $i < count($assoc_arr); $i++) {
        echo $keys[$i] . " => " . $assoc_arr[$keys[$i]] . "\n";
    }
    echo "\n";
    // c) using foreach() loop
    foreach($assoc_arr as $key => $value) {
        echo $key . " => " . $value . "\n";
    }
    echo "\n";

    // Return number of elements in array
    echo 'Count: ' . count($assoc_arr) . "\n" . "\n";

    // Delete element(s) in array
    array_splice($assoc_arr, 1, 2); // deletes 2 elements starting at index 1 (2nd and 3rd elements deleted)

    // Sort elements in array
    // sort($assoc_arr); // Default sort (asc). Loses keys
    // rsort($assoc_arr); // Reverse sort (desc). Loses keys
    // asort($assoc_arr); // Default sort that preserves association.
    // arsort($assoc_arr); // Reverse sort that preserves association.
    // ksort($assoc_arr); // Default sort by key value
    // krsort($assoc_arr); // Reverse sort by key value

    // Return sum of elements in array
    $assoc_numArr = ['1' => 1, '2' => 5, '3' => 7, '4' => 8, '5' => 12, '6' => 14];
    echo 'Sum: ' . array_sum($assoc_numArr) . "\n" . "\n"; // String values count as 0

    // Return min and max values in array
    echo 'Min: ' . min($assoc_numArr) . "\n";
    echo 'Max: ' . max($assoc_numArr) . "\n" . "\n";
?>