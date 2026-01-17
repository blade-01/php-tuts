<!-- Session Management -->
<?php
  session_start();

  // Set session variables
  $_SESSION["username"] = "JohnDoe";
  $_SESSION["role"] = "admin";
  $name = $_SESSION["username"];
  $role = $_SESSION["role"];
  echo "Hi " . $name . ", your role is " . $role . ".";

  // unset($_SESSION["username"]); // Unset specific session variable
  // echo "<br>After unsetting username:<br>";
  // if(isset($_SESSION["username"])) {
  //     echo "Username is set to " . $_SESSION["username"];
  // } else {
  //     echo "Username is not set.";
  // }
  // session_destroy(); // Destroy the session
?>
