<?php
    echo '------ indexed array ------' . "\n" . '------ 1. printing each element' . "\n";
    $arr = array(4,17,15,205,96);

    for ($i = 0; $i < count($arr); $i++) {
        echo $arr[$i];
        if ($i != count($arr) - 1) {
            echo ', ';
        } else {
            echo "\n";
        }
    }

    echo '------ 2. printing every second element' . "\n";
    for ($i = 0; $i < count($arr); $i+=2) {
        echo $arr[$i];
        if ($i != count($arr) - 1) {
            echo ', ';
        } else {
            echo "\n";
        }
    }

    echo '------ associative array ------' . "\n" . '------ 1. printing each element' . "\n";
    $ass_arr = array('k1' => 15, 'k2' => 5, 'k3' => 35, 'k4' => 45, 'k5' => 25);
    $keys = array_keys($ass_arr);

    for ($i = 0; $i < count($ass_arr); $i++) {
        echo $ass_arr[$keys[$i]];
        if ($i != count($ass_arr) - 1) {
            echo ', ';
        } else {
            echo "\n";
        }
    }

    echo '------ 2. printing every second element' . "\n";
    for ($i = 0; $i < count($ass_arr); $i+=2) {
        echo $ass_arr[$keys[$i]];
        if ($i != count($ass_arr) - 1) {
            echo ', ';
        } else {
            echo "\n";
        }
    }
?>