<?php
session_start();
require '../controller/customer_controller.php';

if(isset($_POST['login'])){
$email = trim($_POST['Email']);
$password = trim($_POST['Password']);

$obj = new customerController();
$check = $obj->getCustomerByEmail($email);







if($check){
        //  enter this block if customer is registered..
        $hashed_pass = $check[0]['customer_pass'];
        
      
        if(password_verify($password,$hashed_pass))
        {

            $_SESSION['customer_fname'] = $check[0]['customer_fname'];
            $_SESSION['customer_lname'] = $check[0]['customer_lname'];
            $_SESSION['customer_email'] = $check[0]['customer_email'];

           
            $obj->isAdmin($email)
            ? header('Location: ../Admin/dashboard.php')
            : header('Location: ../login.php') ;

            exit;
        }else{
            header("Location:../login.php");
        }
    }else {
        header('Location:../register.php');
}



}