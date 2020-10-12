<?php
    echo "\n";
    $arr = array('Mantas' => 95, 'Tomas' => 76, 'Petras' => 71, 'Laurynas' => 102);

    $keys = array_keys($arr);
    $min_key = '';
    $min_weight = 999;

    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$keys[$i]] < $min_weight) {
            $min_weight = $arr[$keys[$i]];
            $min_key = $keys[$i];
        }
    }

    echo 'Mažiausiai sveria: ' . $min_key . '. Jo svoris: ' . $min_weight . "\n";

    $max_key = '';
    $max_weight = 0;

    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$keys[$i]] > $max_weight) {
            $max_weight = $arr[$keys[$i]];
            $max_key = $keys[$i];
        }
    }

    echo 'Daugiausiai sveria: ' . $max_key . '. Jo svoris: ' . $max_weight . "\n";

    $max_allowed = 550;

    echo 'Bendra visų žmonių svorių suma yra lygi: ' . array_sum($arr) . '. Jie visi kartu ' . (array_sum($arr) <= $max_allowed ? 'gali' : 'negali') . ' kilti liftu. (max 550kg)' . "\n";
?>