<?php

function count_vowel($string)
{
    $vowel = ["a", "e", "i", "o", "u"];
    $count = 0;
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowel)) {
            $count++;
        }
    }
    return $count;
}



$string = ["Hello", "World", "PHP", "Programming"];
foreach ($string as $item) {
    $count_vowel = count_vowel($item);
    $reverse = strrev($item);

    echo "Original String: $item, Vowel Count: $count_vowel, Reversed String: $reverse<br>";
}
