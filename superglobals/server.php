<!-- This file is a contains superglobals learning -->
<?php
// Display all server information
echo '<h2>$_SERVER Superglobal Information</h2>';
echo '<pre>';
print_r($_SERVER);
echo '</pre>'; 

$server = [
    'Host' => $_SERVER['HTTP_HOST'],
    'User Agent' => $_SERVER['HTTP_USER_AGENT'],
    'Script Name' => $_SERVER['SCRIPT_NAME'],
    'Request Method' => $_SERVER['REQUEST_METHOD'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
];

echo '<h3>Key Server Information:</h3>';
echo '<ul>';
foreach ($server as $key => $value) {
    echo "<li><strong>$key:</strong> $value</li>";
}
echo '</ul>'; 
?>