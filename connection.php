<?php
  // Set connection variables
  $server = "localhost";
  $username = "root";
  $password = "";

$link = mysqli_connect( $server,$username ,  $password , "mynotest_onlinenotes");
if(mysqli_connect_error()){
    die('ERROR: Unable to connect:' . mysqli_connect_error()); 
    echo "<script>window.alert('Hi!')</script>";
}
    ?>