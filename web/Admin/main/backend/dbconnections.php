<?php
$server = "localhost";
 $username = "root";
 $password = "";
 $database = "shopify";


 $conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
  echo("Error " . mysqli_connect_error());
}
// else{
//   $email = 'mark@gmail.com';
//   $name ='Mark';
//   $pass = password_hash('dessy07',PASSWORD_DEFAULT);
//   // echo $pass;
// $sql ="insert into `adminlogin`(`email`,`password`,`name`)  VALUES('$email','$pass','$name')";
// $enter=mysqli_query($conn,$sql);
// if($enter){
//   echo "Done";
// }else{
//   echo"not done";
// }
// }