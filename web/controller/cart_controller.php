<?php

require __DIR__. '/../model/Cart.php';
$operation_status = '';



 

if(isset($_POST["update_qty"]) && !empty($_POST["update_qty"])){
   $prod_id = $_POST["update_qty"];
    $qty = $_POST["qty"];
    updateCartQty($prod_id, $qty, 1);
}     


if(isset($_GET["type"])){
    $type=$_GET["type"];
    switch ($type) {
        case 'add':
            $prod_id = $_GET["prod_id"];
            $qty = $_GET["qty"];
            print "$prod_id";
        
            addItemToCart($prod_id, $qty);
            break;

        case 'delete':
            $prod_id = $_GET["prod_id"];
            removeItemFromCart($prod_id);
            break;

        case 'update':
            $prod_id = $_GET["prod_id"];
            $qty = $_GET["qty"];
            // updateCartQty($prod_id, $qty, 2);
            updateCartQty($prod_id, $qty);
            break;

        default:
            # code...
            break;
    }

}

function getTotalItemsInCart(){
    $ip_add = get_client_ip();
    $cartObj = new ShoppingCart();
    $response = $cartObj->getCartItemQty($ip_add);
    if($response){
        $row = $cartObj->db_count();
        return ($row != null) ? $row : "0";
    }  else{
        return "0";
    }
}

function getTotalItemAmountInCart(){
    $ip_add = get_client_ip();
    $cartObj = new ShoppingCart();
    $response = $cartObj->getCartItemsAmount($ip_add);
    if($response){
        $row = $cartObj->db_fetch();
        return ($row['amount'] != null) ? $row['amount'] : "0";
    }  else{
        return "0";
    }
}

// function insertOrder($status, $invoice){
//     $toReturn = false;
//     $ip_add = get_client_ip();
//     $user_id=$_SESSION['user_id'];
//     $cartObj = new ShoppingCart();
//     $cartProducts = $cartObj->getCartItems($ip_add);
//     if($cartProducts){
//         $cartItems = $cartObj->fetchall();

//         foreach ($cartItems as $item =>$value) {
//             $prod_id = $value[0];
//             $qty = $value[10];
//             $toReturn = $cartObj->insertorders($user_id, $prod_id, $qty, $invoice, $status);
//         }
//     }
//    return $toReturn;
// }


//function to add item to cart
function addItemToCart($prod_id, $qty){
    
    $toReturn = array();
    $ip_add = get_client_ip();
    $cartObj = new ShoppingCart();
    

    //check for duplicates
    // $check = validateCart($ip_add, $prod_id);

    // if(count($check)==0){

    // }

    //when this is new addToCart($prod_id, $ip_adr, $qty)
        $response = $cartObj->addToCart($prod_id, $ip_add, $qty);
            // $response = $cartObj->addToCart($prod_id, $ip_add, $qty);
            
        if($response){
            
            print_r('Item successfully added to cart');
        //     $toReturn[] = array(
        //             'status' => 'success',
        //             'message' => 'Item added to cart successfully!'
        //         );
        // json_encode($toReturn);
        } else {
        // $toReturn[] = array(
        //     'status' => 'failed',
        //     'message' => 'Could not add item to cart'
        // );
        // echo json_encode($toReturn);
        print_r('Error adding to cart');
        }

    

}
//function to remove item from cart
function removeItemFromCart($prod_id){
    $toReturn = array();
    $ip_add = get_client_ip();
    $cartObj = new ShoppingCart();

    $response = $cartObj->removeCartItem($prod_id, $ip_add);
        if($response){
            $toReturn[] = array(
                'status' => 'success',
                'message' => 'item successfully removed from cart'
            );
            echo json_encode($toReturn);

        } else{
            $toReturn[] = array(
                'status' => 'failed',
                'message' => 'Could not delete item from cart'
            );
            echo json_encode($toReturn);
        }

}

//function to update item in cart
function updateCartQty($prod_id, $qty){
    $toReturn = array();
    $ip_add = get_client_ip();
    $cartObj = new ShoppingCart();

    $response = $cartObj->updateCartQuantity($prod_id, $qty, $ip_add);

    if($ip_add){
        if($response){
            $toReturn[] = array(
                'status' => 'success',
                'message' => 'item quantity successfully updated'
            );
            echo json_encode($toReturn);

        } else{
            $toReturn[] = array(
                'status' => 'failed',
                'message' => 'Could not update cart item quantity'
            );
            echo json_encode($toReturn);
        }

    } else{
        if($response){
            $toReturn[] = array(
                'status' => 'success',
                'message' => 'item quantity successfully updated'
            );
            echo json_encode($toReturn);

        } else{
            $toReturn[] = array(
                'status' => 'failed',
                'message' => 'Could not update cart item quantity'
            );
            echo json_encode($toReturn);
        }
    }

}
// Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}


function deleteCart(){
    $ip_address=get_client_ip();
    $obj=new ShoppingCart();
    $del=$obj->deletecart($ip_address);
}

function isExist($ip_add, $prod_id){
  $arr = array();
    $cartObj = new ShoppingCart();
$check = $cartObj->validateCart($ip_add, $prod_id);
if ($check) {

  while ($record = $cartObj->db_fetch()) {


              $arr[] = $record;
          }
      }

      return $arr;

}



function validateCart($a,$b){
    //Create an array variable to hold list of search records
    $product_array = array();

    //create an instance of the product class
    $product_object = new ShoppingCart();

    //run the search product method
    $product_records = $product_object->validateCart($a,$b);

    //check if the method worked
    if ($product_records) {

        //loop to see if there is more than one result
        //fetch one at a timeh
        while ($one_record = $product_object->db_fetch()) {

            //Assign each result to the array
            $product_array[] = $one_record;
        }
    }
    //return the array
    return $product_array;
}

function getCartItems(){
  //Create an array variable to hold list of search records
  $product_array = array();

  //create an instance of the product class
  $product_object = new ShoppingCart();

  //run the search product method
  $ip = get_client_ip();
  $product_records = $product_object->getCartItems($ip);

  //check if the method worked
  if ($product_records) {

      //loop to see if there is more than one result
      //fetch one at a time
      while ($one_record = $product_object->db_fetch()) {

          //Assign each result to the array
          $product_array[] = $one_record;
      }
  }
  //return the array
  return $product_array;

}

function cartDisplay(){

  $cart = getCartItems();
  // $amt =getTotalItemAmountInCart();

  if ($cart) {
      foreach ($cart as $value) {
          $id = $value['product_id'];
          $title = $value['product_title'];
          $price = $value['product_price'];
          $desc = $value['product_desc'];

          $qty = $value['qty'];
  
        $img = $value['product_image'];

        $total = $price*$qty;

        echo <<< _CART
        <li class="cart_item clearfix">
          <div class="cart_item_image rounded-circle"><img src=".$img" alt=""></div>
          <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
            <div class="cart_item_name cart_info_col">
              <div class="cart_item_text">$title</div>
            </div>
            <div class="cart_item_quantity cart_info_col">
              <div class="cart_item_title">Quantity</div>
              <input type="number" value="$qty" id="update-qty" class="">
            </div>
            <div class="cart_item_price cart_info_col">
              <div class="cart_item_title">Price</div>
              <div class="cart_item_text">$price</div>
            </div>
            <div class="cart_item_total cart_info_col">
              <div class="cart_item_title">Total</div>
              <div class="cart_item_text" id="total">GH¢ $total.00</div>
            </div>
            <div class="cart_item_total cart_info_col">
              <button type="button" value="$id" onclick="updateCartItemQty($id)" class="cart_item_title btn-primary">Update Quantity</button>
              <button type="button" value="$id" onclick="removeCartItem($id)" class="cart_item_title btn-danger">Delete</button>
              
            </div>
          </div>
        </li>
        _CART;

      }
    }
}
