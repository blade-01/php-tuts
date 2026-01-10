<?php
  // Comment style 1: Single line comment
  # Comment style 2: Single line comment
  /* Comment style 3: Multi-line
     comment
  */
    //  Variables in PHP
    /*
      - A variable starts with the $ sign, followed by the name of the variable
      - A variable name must start with a letter or the underscore character (_)
      - A variable name cannot start with a number
      - A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
      - Variable names are case-sensitive ($age and $AGE are two different variables)
    */

    // Data types: String, Integer, Float, Boolean, Array, Object, NULL, Resource
    
    $firstName = "John";
    $lastName = "Doe";
    $string = "Hello World";
    $integer = 42;
    $float = 3.14;
    $boolean = true; // or false
    $array = array("apple", "banana", "cherry");
    $nullVar = NULL;
    $sum = $integer + $float;

    // Concatenation operator (.)
    echo $sum . "\n";
    echo $firstName ." ". $lastName . "\n";
    echo "$firstName $lastName"; // Double quotes will parse variables
   
    // Constant
    define("PI", 3.14159);
    echo "\nValue of PI: " . PI;

?>