<?php

function isPalindrome($word) {
    $wordArray = str_split($word, 1);
    $reversedWord = strrev($word);
    $reversedWordArray = str_split($reversedWord, 1);
    $arraysEqual = ($wordArray === $reversedWordArray);
  
    return $arraysEqual;
}

$palindromes = ['noon', 'civic', 'reviver', 'word', 'racecar', 'redder'];

foreach($palindromes as $palindrome) {
  	echo $palindrome . "\n";
	var_dump(isPalindrome($palindrome));
  	echo "\n\n";
}
