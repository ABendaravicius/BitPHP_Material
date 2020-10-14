<?php
    declare(strict_types=1);

    function buble_sort(array &$arr) {
        for ($i = 0; $i < count($arr); $i++) {
            if (gettype($arr[$i]) == "integer" || gettype($arr[$i]) == "double") {
                for ($j = 0; $j < count($arr) - $i - 1; $j++) {
                    if ($arr[$j] > $arr[$j + 1]) {
                        $tmp = $arr[$j];
                        $arr[$j] = $arr[$j + 1];
                        $arr[$j + 1] = $tmp;
                    }
                }
            } elseif (gettype($arr[$i]) == "string") {
                for ($j = 0; $j < count($arr) - $i - 1; $j++) {
                    if (strcmp($arr[$j], $arr[$j + 1]) > 0) {
                        $tmp = $arr[$j];
                        $arr[$j] = $arr[$j + 1];
                        $arr[$j + 1] = $tmp;
                    }
                }
            }
        }
    }

    function array_to_string(array $arr) {
        print '[ ';
        for ($i = 0; $i < count($arr); $i++) {
            print $arr[$i];
            if ($i != count($arr) - 1) {
                print ', ';
            }
        }
        print " ]\n\n";
    }
?>