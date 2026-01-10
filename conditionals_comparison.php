<!-- This file contains conditional and comparison examples for the sandbox project -->
<?php
// Conditional Statements
$age = 20;
if ($age < 13) {
    echo "You are a child.</br>";
} elseif ($age >= 13 && $age < 20) {
    echo "You are a teenager.</br>";
} else {
    echo "You are an adult.</br>";
} 
// Switch Statement
$day = "Wednesday";
switch ($day) {
    case "Monday":
        echo "It's Monday, the start of the week!</br>";
        break;
    case "Wednesday":
        echo "It's Wednesday, we're halfway through!</br>";
        break;
    case "Friday":
        echo "It's Friday, the weekend is near!</br>";
        break;
    default:
        echo "It's just another day.</br>";
        break;
}
// Comparison Operators
$a = 10;
$b = "10";
if ($a == $b) {
    echo "$a is equal to $b (loose comparison)</br>";
}
if ($a === $b) {
    echo "$a is identical to $b (strict comparison)</br>";
} else {
    echo "$a is not identical to $b (strict comparison)</br>";
}
if ($a != 5) {
    echo "$a is not equal to 5</br>";
}
if ($a !== "10") {
    echo "$a is not identical to '10'</br>";
}
if ($a > 5) {
    echo "$a is greater than 5</br>";
}
if ($a < 15) {
    echo "$a is less than 15</br>";
}
if ($a >= 10) {
    echo "$a is greater than or equal to 10</br>";
}
if ($a <= 20) {
    echo "$a is less than or equal to 20</br>";
}
// Logical Operators
$hasID = true;
$age = 22;
if ($hasID && $age >= 18) {
    echo "You can enter the club.</br>";
} else {
    echo "You cannot enter the club.</br>";
}
if ($age < 18 || $age > 65) {
    echo "You get a discount.</br>";
} else {
    echo "No discount available.</br>";
}
if (!$hasID) {
    echo "You need to show your ID.</br>";
}
?>