<?php
require('../settings/db_class.php');


class Customer extends db_connection
{
 // register,login, add to cart,buy,logout

// CRUD
// method to create a customer

 function createCustomer($firstname, $lastname,$email,$pass){
    $sql = "INSERT INTO 
    customer(`customer_fname`,`customer_lname`,`customer_email`,`customer_pass`) 
    Values('$firstname', '$lastname','$email','$pass')";
        return $this->db_query($sql);
    }
// select all customers

function getAllCustomers(){
    $sql = "SELECT * FROM customer";
    return $this->db_query($sql);
    
}
// update a customer
 function updateCustomer($id,$firstname, $lastname,$email){
    $sql = "UPDATE customer
    SET `customer_fname`='$firstname',
    SET `customer_lname`='$lastname',
        `customer_email`='$email'   
    WHERE customer_id='$id'";

   return $this->db_query($sql);
    
}
// get one customer
 function getOneCustomer($id){
$sql = "SELECT * FROM customer WHERE customer_id = '$id'";
 //run the sql execution
 return $this->db_query($sql);
}
// delete a customer
function deleteCustomer($id){
    $sql="DELETE FROM customer WHERE customer_id = '$id'";
    return $this->db_query($sql);

}

// get customer by email
function getCustomerByEmail($email){
        $sql = "SELECT * FROM customer WHERE customer_email = '$email'";
        return $this->db_query($sql);
}

// method to change the customer

function changeRole($id,$role){
    $sql = "UPDATE customer 
        SET     `user_role`= '$role'
        WHERE `customer_id` = '$id'";
 //run the sql execution
 return $this->db_query($sql);
}

    




}