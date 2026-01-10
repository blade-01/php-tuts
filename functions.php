<!-- This file contains custom functions for the sandbox project -->
<?php 
function greet($name = "Guest") {
    return "Hello, " . htmlspecialchars($name) . "!";
}

function add($a, $b) {
    return $a + $b;
}

function factorial($n) {
    if ($n < 0) {
        return "Undefined for negative numbers";
    } elseif ($n === 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

function is_prime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

$myNum = 5;

function addFive(&$num) {
    $num += 5; // This change will affect the original variable
}

function addTen($num) {
    $num += 10; // This change won't affect the original variable
}

// Calling the functions for demonstration
echo greet("World") . "</br>";
echo greet() . "</br>";
echo "Sum of 5 and 10: " . add(5, 10) . "</br>";
echo "Factorial of 5: " . factorial(5) . "</br>";
echo "Is 7 prime? " . (is_prime(7) ? "Yes" : "No") . "</br>"; 
addFive($myNum);
echo "Value: $myNum </br>";
addTen($myNum);
echo "Value: $myNum </br>";
?>