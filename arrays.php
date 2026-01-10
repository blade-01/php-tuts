<?php
  $colors = array("red", "green", "blue");
  $cars = ["toyota", "mitsubishi", "honda"];
  $cars[3] = "hyundai"; // Adding an element to the array
  $cars[] = "benz"; // Another way to add an element to the array

  echo "First color: $colors[0] </br>";
  echo "Second color: $colors[1] </br>";
  echo "Third color: $colors[2] </br>";
  echo "$cars[4] </br>";
  print_r($cars); // Print the entire array
  echo "</br>";
  var_dump($colors); // Detailed information about the array
  echo "</br>";
  echo count($cars); // Get the length of the array

  // Associative array
  $ages = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
  echo "Peter is " . $ages["Peter"] . " years old. </br>";
  $ages["Sam"] = 29; // Adding an element to the associative array

  // Multidimensional array
  $contacts = array(
    "John" => array("phone" => "123-4567", "email" => "john@example.com"),
    "Jane" => array("phone" => "987-6543", "email" => "jane@example.com")
  );
  echo "John's email: " . $contacts["John"]["email"] . "</br>";
  echo "Jane's phone: " . $contacts["Jane"]["phone"] . "</br>";
  print_r($contacts);
?>