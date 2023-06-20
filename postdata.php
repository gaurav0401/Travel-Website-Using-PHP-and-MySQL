<!-- This page is for sending data to the server 
1.connect a database with PHP (mySQL in our case)
2.Store the data which is sent by a client to a variables and then update that data in database;
3.close connection. -->


<?php

$user="root";
$host="localhost";
$passwd="";
$check=false;

$con=mysqli_connect($host , $user , $passwd);


// if ($con){
//     echo "Connection is established....";
// }

// else {

//     echo "failed connection";

   
// }

if (isset($_POST['fname'])){


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$email=$_POST['email'];
$pass=$_POST['pass1'];
$pass2=$_POST['pass2'];

$query="Insert into `travel`.`reg1` (`fname`, `lname`, `phone`, `gender`, `address`, `email`, `pass1`, `pass2`) VALUES ('$fname' , '$lname' , '$phone' , '$gender' , '$address' , '$email' , '$pass' , '$pass2');";

if ($con->query($query)){
    echo "<script>
         function dialog(){
                 alert ('Data has been sent to the server successfully...');
         }

         dialog();
    </script>";

    echo require ('signup.php');
}

else {
    echo "Failed due to:".$con->error;
}

$con->close();

}

else {

    echo "\n<br>Please enter information first";
}








?>