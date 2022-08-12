<?php

$s = 'meet';

function reverseString(&$s)
{
    $left = 0;
    $right = count($s) - 1;

    while($left < $right) {
        $current = $s[$left];
        $s[$left] = $s[$right];
        $s[$right] = $current;
        $right--;
        $left++;
    }
}

echo $s;
