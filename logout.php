<?php
session_start();

session_unset();
session_destroy();

echo "<script> function dis(){
    alert('You have been log out...Thank You');
   
  } 
  dis();
  </script>";

  require('signup.php');



?>