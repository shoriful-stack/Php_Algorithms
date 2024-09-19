<!-- Count Vowels in a String
Write a PHP function to count the number of vowels (a, e, i, o, u) in a given string.

Explanation:
To count vowels, we loop through the string and check if each character is a vowel (a, e, i, o, u). We can make the comparison case-insensitive by converting the string to lowercase.

In-Array Check: The in_array() function checks if the current character is in the array of vowels.

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
