<?php 
function isPrime($n) {
    // If the number is less than or equal to 1, it is not prime
    if ($n <= 1) {
        return false;
    }

    // Start checking from 2 to the number itself (exclusive)
    for ($i = 2; $i < $n; $i++) {
        // If the number is divisible by any number other than 1 and itself, it's not prime
        if ($n % $i == 0) {
            return false;
        }
    }

    // If no divisors were found, the number is prime
    return true;
}

// Call the function to check if 7 is prime
echo isPrime(7);  // Output: 1 (true)

// Call the function to check if 10 is prime
echo isPrime(10); // Output:  (false)
?>