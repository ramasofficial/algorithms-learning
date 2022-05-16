<?php

$array = [
    'a', 'A',
    'b', 'B',
    'c', 'C',
    'd', 'D',
    'e', 'E',
    'f', 'F',
    'g', 'G',
    'h', 'H',
    'i', 'I',
    'j', 'J',
    'k', 'K',
    'l', 'L',
    'm', 'M',
    'n', 'N',
    'o', 'O',
    'p', 'P',
    'q', 'Q',
    'r', 'R',
    's', 'S',
    't', 'T',
    'u', 'U',
    'v', 'V',
    'w', 'W',
    'x', 'X',
    'y', 'Y',
    'z', 'Z',
    0, 1, 2, 3, 4, 5, 6, 7, 8, 9,
];

// AA, AB, AC
// BA, BB, BC
$chars = ['A', 'B'];

function generateCombinations($chars, $size, $combinations = []) {
    # if it's the first iteration, the first set 
    # of combinations is the same as the set of characters
    if ($combinations === []) {
        $combinations = $chars;
    }

    # we're done if we're at size 1
    if ($size === 1) {
        return $combinations;
    }

    # initialise array to put new values in
    $newCombinations = [];

    # loop through existing combinations and character set to create strings
    foreach ($combinations as $combination) {
        foreach ($chars as $char) {
            $newCombinations[] = $combination . $char;
        }
    }

    # call same function again for the next iteration
    return generateCombinations($chars, $size - 1, $newCombinations);
}

print_r(generateCombinations($array, 4));
print_r(count($array));
