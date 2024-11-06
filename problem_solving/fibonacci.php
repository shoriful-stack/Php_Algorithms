<!-- Generate the Fibonacci sequence up to the nth number. The Fibonacci sequence starts with 0 and 1, and each subsequent number is the sum of the previous two. -->
<!-- Fibonacci Sequence (Using Loop) -->
<?php
function fibonacci( $n ) {
    // Initialize an array with the first two Fibonacci numbers 0 and 1
    $fib = [0, 1];

    // Loop through the numbers starting from index 2 to n
    for ( $i = 2; $i <= $n; $i++ ) {
        // Each number in the Fibonacci sequence is the sum of the previous two
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    // Return the complete Fibonacci sequence as an array
    return $fib;
}
print_r( fibonacci( 10 ) );
?>


<!-- Fibonacci Sequence (Using Recursion)
Problem Statement: Generate the Fibonacci sequence using recursion. -->

<?php
function fibonacciR( $n ) {
    // Base case: If the number is 0 or 1, return the number itself (fibonacci(0) = 0, fibonacci(1) = 1)
    if ( $n <= 1 ) {
        return $n;
    }
    // Recursive case: Return the sum of fibonacci(n - 1) and fibonacci(n - 2)
    return fibonacciR( $n - 1 ) + fibonacciR( $n - 2 );
}
// Loop through the first 10 Fibonacci numbers and print each one
for ( $i = 0; $i <= 10; $i++ ) {
    echo fibonacciR( $i ) . " ";
}
?>

<?php

$num1 = 0;
$num2 = 1;
$num3 = 1;

for ( $i = 0; $i < 10; $i++ ) {
    echo $num1 . "\n";
    $num2 = $num3;
    $num3 = $num2 + $num1;
    $num1 = $num2;
}

function FibonacciS($n) {
    $a = 0; 
    $b = 1; 

    echo "Fibonacci series up to $n numbers: ";

    for ($i = 0; $i < $n; $i++) {
        echo $a . " ";
        $next = $a + $b;
        $a = $b; 
        $b = $next;
    }
}
FibonacciS(12);