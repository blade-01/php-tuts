<!-- This file is to display server information -->
<?php
// Server Information
$server = [
    'Host' => $_SERVER['HTTP_HOST'],
    'User Agent' => $_SERVER['HTTP_USER_AGENT'],
    'Script Name' => $_SERVER['SCRIPT_NAME'],
    'Request Method' => $_SERVER['REQUEST_METHOD'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
];

// Client Information
$client = [
    'Remote Address' => $_SERVER['REMOTE_ADDR'],
    'Remote Port' => $_SERVER['REMOTE_PORT'],
    'Referer' => isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'N/A',
];
?>