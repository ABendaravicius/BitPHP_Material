<?php
    echo '------ multi-dimensional array flattenning ------' . "\n\n";

    $arr = array([[7,9,5],[1,6,2]],[[3,12,4],[8,17,11]],[[10,16,15],[13,18,14]]);

    function array_to_string($arr = array()) { // function to print all elements of a one-dimensional array in a line
        for ($i = 0; $i < count($arr); $i++) {
            echo $arr[$i];
            if ($i != count($arr)-1) {
                echo ", ";
            }
        }
    }

    echo "Array before flatenning:\n[[7,9,5],[1,6,2]],[[3,12,4],[8,17,11]],[[10,16,15],[13,18,14]]\n\n" ;
    
    // Merging of 3rd dimension arrays
    for ($i = 0; $i < count($arr); $i++) {
        $arrays_for_merge = array();

        for ($j = 0; $j < count($arr[$i]); $j++){
            array_push($arrays_for_merge,$arr[$i][$j]);
        }

        $merged_array = array_merge(...$arrays_for_merge);
        $arr[$i] = $merged_array;
    }

    // Mergins of 2ndt dimension arrays
    $arrays_for_merge = array();

    for ($i = 0; $i < count($arr); $i++) {
        array_push($arrays_for_merge, $arr[$i]);
    }

    $arr = array_merge(...$arrays_for_merge);

    echo 'Array after flatenning, before sorting:' . "\n" . '[';
    array_to_string($arr);
    echo "]\n\n";

    sort($arr);

    echo 'Array after flatenning and sorting:' . "\n" . '[';
    array_to_string($arr);
    echo "]\n\n";

?>