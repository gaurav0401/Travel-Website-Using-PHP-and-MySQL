<?php

session_start();

if (isset($_POST['email'] ) && isset($_POST['pass'])){
             
    echo "<script> function dis(){
        alert('Successfully login...');
       
      } 
      dis();
      </script>";

      require('home.html');

}

else {


      echo "<script> function dis(){
        alert('Please enter email and password');
       
      } dis(); </script>";

}






?>