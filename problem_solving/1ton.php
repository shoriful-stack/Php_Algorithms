<!-- Sum of Even Numbers from 1 to N
Write a PHP function to calculate the sum of all even numbers between 1 and n.

Explanation:
To find the sum of even numbers, we loop through all numbers from 1 to n, incrementing by 2 to only include even numbers. -->
<!-- Even Numbers: We start from 2 and increment by 2, ensuring only even numbers are added to the sum. -->

<?php 
function sumOfNumbers($n){
    $sum = 0;
    for($i = 2; $i <= $n; $i+= 2){
       $sum = $sum + $i; 
    }
    return $sum;
}

echo sumOfNumbers(10);
?>