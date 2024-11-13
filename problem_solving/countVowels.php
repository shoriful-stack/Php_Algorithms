<?php 
function countVowels($string) {
    preg_match_all('/[aeiou]/i', $string, $matches);
    return count($matches[0]);
}

function removeDuplicates($arr) {
    return array_values(array_unique($arr));
}

?>