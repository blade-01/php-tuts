<?php
// This file contains loop examples for the sandbox project
// For loop
echo "For Loop: </br>";
for ($i = 1; $i <= 5; $i++) {
    echo "Iteration: $i </br>";
}
echo "</br>";
// While loop
echo "While Loop: </br>";
$j = 1;
while ($j <= 5) { 
    echo "Iteration: $j </br>";
    $j++;
}
echo "</br>";
// Do-While loop
echo "Do-While Loop: </br>";
$k = 1;
do {
    echo "Iteration: $k </br>";
    $k++;
} while ($k <= 5);
echo "</br>";
// Foreach loop
echo "Foreach Loop: </br>";
$fruits = array("Apple", "Banana", "Cherry");
foreach ($fruits as $fruit) {
    echo "Fruit: $fruit </br>";
}
echo "</br>";
// Break and Continue
echo "Break and Continue: </br>";
for ($m = 1; $m <= 10; $m++) {
    if ($m == 6) {
        break; // Exit the loop when m is 6
    }
    if ($m % 2 == 0) {
        continue; // Skip even numbers
    }
    echo "Odd Number: $m </br>";
}
echo "</br>";
?>