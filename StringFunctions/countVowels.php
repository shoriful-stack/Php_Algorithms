<?php
function countVowels($str) {
    $vowels = 0;
    $str = strtolower($str);  // Convert the string to lowercase
    $length = strlen($str);    // Get the string length
    
    for ($i = 0; $i < $length; $i++) {
        if (in_array($str[$i], ['a', 'e', 'i', 'o', 'u'])) {
            $vowels++;  // Increment the counter if it's a vowel
        }
    }
    
    return $vowels;  // Return the number of vowels
}

echo countVowels("Programming is fun!");  // Output: 5
?>
