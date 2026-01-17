<!-- Cookie Management -->
 <?php 
  $name = "user";
  $value = "JaneDoe";
  $expire = time() + (86400 * 30); // 30 days from now
  setcookie($name, $value, $expire); 
  if(isset($_COOKIE[$name])) {
      echo "Hi " . $_COOKIE[$name] . ", welcome back!";
  } else {
      echo "Cookie named '" . $name . "' is not set!";
  }
  
  // print_r($_COOKIE);

  // To delete the cookie, uncomment the following line
  // setcookie($name, "", time() - 3600);
?>