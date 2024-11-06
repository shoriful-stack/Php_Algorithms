<!-- **Factorial Calculation**
[Problem]: Calculate the factorial of a given number.
[Concepts]: Loops, recursion.
[Key Learning]: Basic use of loops and recursion in PHP.

Using Loops=> -->

<?php 
function factorial_loop($n){
    // Initialize the result as 1 since multiplying anything by 1 doesn't change the value
    $result = 1;
    for($i = 1; $i <= $n; $i++){
        $result = $result * $i;
    }
    return $result;
}
echo factorial_loop(7);

?>

<!-- Using Recursion=> -->

<?php
function factorial_recursion($n){
    // Base case: If the number is 0, return 1 (factorial of 0 is 1)
    if($n == 0){
        return 1;
    }
    // Recursive case: Return n multiplied by the factorial of (n - 1)
    return $n * factorial_recursion($n - 1);
}
echo factorial_recursion(7);

?>