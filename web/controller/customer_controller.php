<?php
require('../model/Customer.php');

class customerController
{
    function createCustomer($firstname, $lastname, $email, $pass){
        $obj = new Customer();
    $check = $obj->createCustomer($firstname, $lastname, $email, $pass);
    return  $check = $check ?: false;

    }

    function getAllCustomers(){

        // declare an empty array for database records
        $data = array();
    
        $obj = new Customer();

        $all_cus = Customer::getAllCustomers();

        if($all_cus){
            while($one = $obj->db_fetch()){
                $data[] = $one;

            }
        }

        return $data;

    }

    function getCustomerByEmail($email){
        // declare an empty array for database records
        $data = array();

        $obj = new Customer();

        $all_cus = $obj->getCustomerByEmail($email);

        if ($all_cus) {
            while ($one = $obj->db_fetch()) {
                $data[] = $one;
            }
        }

        return $data; 
    }

// check admin
    function isAdmin($email){
            $customer = $this->getCustomerByEmail($email);

            return ($customer['user_role'] === 1) ? true : false;
    }


    function isGuest($email){
        $customer = $this->getCustomerByEmail($email);

            return ($customer['user_role'] === 0 || $customer['user_role'] === NULL ) ? true : false;
    }

    function updateCustomer($id,$firstname, $lastname,$email){
       $check = Customer::updateCustomer($id, $firstname, $lastname, $email);
        return  $check = $check ?: false;
    }

    function getOneCustomer($id){
       $data = array();
    
        $obj = new Customer();

        $all_cus = Customer::getOneCustomer($id);

        if($all_cus){
            while($one = $obj->db_fetch()){
                $data[] = $one;

            }
        }

        return $data;
    }

    function deleteCustomer($id){
        $check = customer::deleteCustomer($id);
        return  $check = $check ?: false;
    }

    function changeRole($id,$role){
        $check = customer::changeRole($id,$role);
        return  $check = $check ?: false;
    }




 // end class 
}
