<?php
    echo '----------------' . "\n";
    echo '1. Operacijos su masyvais' . "\n";
    echo '1.1. Vienmatis masyvas' . "\n";
    
    echo '> Initialization' . "\n";
    $oneD_arr = array('Tomas','Petras','Jonas','Ieva');
    print_r ($oneD_arr);

    echo '> Return value at selected index' . "\n";
    echo 'Value at index 0: ' . $oneD_arr[0] . "\n";

    echo '> Edit value at selected index' . "\n";
    $oneD_arr[0] = 'Timas';
    echo 'New value at index 0: ' . $oneD_arr[0] . "\n";

    echo '> Add new value to the end of array' . "\n";
    array_push($oneD_arr, 'Migle');
    echo 'New value at new index 4: ' . $oneD_arr[4] . "\n";

    echo '> Return all values in array' . "\n";
    // using print_r()
    echo print_r($oneD_arr[0]);
    // using for() loop
    for ($i = 0; $i < count($oneD_arr); $i++) {
        echo $oneD_arr[$i];0
    }


?>