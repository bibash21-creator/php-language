<?php
// ...existing code...

function isEvenOrOdd($number) {
    if ($number % 2 == 0) {
        return "$number is even";
    } else {
        return "$number is odd";
    }
}

// Example usage
echo isEvenOrOdd(5); // Output: 5 is odd
echo isEvenOrOdd(6); // Output: 6 is even

// ...existing code...
?>