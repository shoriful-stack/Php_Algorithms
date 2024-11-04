<!-- Check for a Leap Year
Write a PHP function to check whether a given year is a leap year.

Explanation:
A leap year is divisible by 4 but not by 100, unless it's also divisible by 400. This can be implemented using simple conditional checks. -->
<!-- Leap Year Condition: The function checks if the year is divisible by 4 but not 100, unless divisible by 400. -->


<?php 
function leapYear($year){
    return ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
}

echo leapYear(2012) ? "Leap Year" : "Not Leap Year";
echo "\n";


$year = 2012;
if($year % 4 === 0 && ($year % 100 !== 0 || $year % 400 === 0)){
    echo "{$year} is a leap year";
}else{
    echo "{$year} is not a leap year";
}
?>
