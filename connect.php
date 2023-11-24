<?php
$hostname="localhost";
$user="root";
$pass="";
$db="restu";

 $con= mysqli_connect($hostname,$user,$pass,$db);

if($con){
  echo"ok";
}

else{
  echo"db not connected";
}
?>
