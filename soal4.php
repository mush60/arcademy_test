<?php

function SortArr($new_arr) {

    sort($new_arr);

    $lenarr = count($new_arr);

    for ($j=0; $j<$lenarr; $j++) {
            sort($new_arr[$j]);
            $narr[$j] = $new_arr[$j];
    }
    
    print_r($narr);

} 

echo "input jml array : ";               //get input from user
$narr = trim(fgets(STDIN));

for ($i = 0; $i < $narr; $i++) {

    echo "input susunan array ke ".$i." : ";           //get input from user
    $strin = trim(fgets(STDIN));

    $arr[$i] = str_split($strin);

}

SortArr($arr);