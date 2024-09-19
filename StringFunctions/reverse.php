<!-- Reverse a String
Write a PHP function to reverse a given string without using PHP's strrev() function.

Explanation:
To reverse a string, we need to loop through it from the end to the beginning and concatenate each character to a new string. -->

<?php
function reverseString($str) {
    $reversed = "";
    $length = strlen($str);  // Find the length of the string
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $str[$i];  // Append each character from the end
    }
    return $reversed;
}

echo reverseString("Hello World");  // Output: "dlroW olleH"
?>