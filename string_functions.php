<!-- This file contains string manipulation functions  -->
<?php
function toUpperCase($string) {
    return strtoupper($string);
}

function toLowerCase($string) {
    return strtolower($string);
}

function capitalizeWords($string) {
    return ucwords($string);
}

function reverseString($string) {
    return strrev($string);
}


function trimString($string) {
    return trim($string);
}

function stringLength($string) {
    return strlen($string);
}

function replaceSubstring($search, $replace, $string) {
    return str_replace($search, $replace, $string);
} 

function substring($string, $start, $length = null) {
    if ($length) {
        return substr($string, $start, $length);
    }
    return substr($string, $start);
}
echo toUpperCase("hello world") . "<br>";
echo toLowerCase("HELLO WORLD") . "<br>";
echo capitalizeWords("hello world from php") . "<br>";
echo reverseString("hello") . "<br>";
echo trimString("   hello world   ") . "<br>";
echo stringLength("hello world") . "<br>";
echo replaceSubstring("world", "PHP", "hello world") . "<br>";
echo substring("hello world", 0, 5) . "<br>";
?>