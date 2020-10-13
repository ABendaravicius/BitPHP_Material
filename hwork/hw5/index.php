<?php
    include 'lib.php';

    $number_array = array(7, 13, 8, 11, 5, 24, 6, 2, 17);
    $string_array = array('Hello', 'Apple', 'Banana', 'Pole', 'Saw', 'Glove', 'Bowl');

    print "\n> Number array sorting: \n\n";
    print "Array before sorting: \n";
    array_to_string($number_array);
    buble_sort($number_array);
    print "Array after sorting: \n";
    array_to_string($number_array);

    print "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";

    print "> String array sorting: \n\n";
    print "Array before sorting: \n";
    array_to_string($string_array);
    buble_sort($string_array);
    print "Array after sorting: \n";
    array_to_string($string_array);
?>