<?php
$conn = mysqli_connect('localhost', 'Blade', 'Blade-01', 'php_todo'); // Host, Username, Password, Database

//  Check connection
if (!$conn) {
  echo 'Connection error: ' . mysqli_connect_error();
}
