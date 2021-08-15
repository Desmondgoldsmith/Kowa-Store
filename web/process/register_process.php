<?php
require '../controller/customer_controller.php';

if(isset($_POST['register'])){

    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['Email']);
    $password = trim($_POST['Password']);


// instance of the customercontoller class
// $customer = new customerController();  
$hashPass = password_hash($password,PASSWORD_DEFAULT);

$check = (new customerController())->createCustomer($fname, $lname, $email, $hashPass);



$check
? header('Location:../login.php')
: header('Location: ../register.php');



     
 }