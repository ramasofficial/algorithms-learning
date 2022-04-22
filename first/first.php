<?php

$array = [4,6,7,9,3,12];
$sum = 13;


// First with foreach loop
foreach($array as $first) {
    array_shift($array);
    foreach($array as $second) {
        array_shift($array);
        foreach($array as $third) {
            $arraySum = $first + $second + $third;
            
            if($arraySum === $sum) {
                echo $first . ' + ';
                echo $second . ' + ';
                echo $third . ' = ' . $sum;
            }
        }
    }
}

echo PHP_EOL;

$array = [4,6,7,9,3,12];
$sum = 13;

// Second with for loop
$arrayCount = count($array) - 1;
for($i=0; $i<=$arrayCount; $i++) {
    for($a=1; $a<=$arrayCount; $a++) {
        for($b=2; $b<=$arrayCount; $b++) {
            
            if($array[$i] === $array[$a] || $array[$i] === $array[$b] || $array[$a] === $array[$b]) {
                continue;
            }
            
            $newArray = [];
            $newArray[] = $array[$i];
            $newArray[] = $array[$a];
            $newArray[] = $array[$b];
            
            $arraySum = array_sum($newArray);
            
            if($arraySum === $sum) {
                echo $array[$i] . ' + ';
                echo $array[$a] . ' + ';
                echo $array[$b] . ' = ' . $sum;
                break 3;
            }
        }
    }
}
