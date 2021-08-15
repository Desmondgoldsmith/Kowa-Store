<?php
require __DIR__ . '/../settings/db_class.php';

require_once __DIR__.'/../settings/core.php';


class ShoppingCart extends db_connection
{

    // use Core;

    public function getCartItems($ip_address)
    {
        $sql = "SELECT p.product_id, p.product_cat, p.product_brand, p.product_price, p.product_title, p.product_desc, p.product_image, p.product_keywords, c.p_id, c.ip_add, c.qty FROM products AS p JOIN cart AS c ON p.product_id = c.p_id AND c.ip_add = '$ip_address'";
        return $this->db_query($sql);
    }
    public function getCartItemQty($ip_address)
    {
        $sql = "SELECT * FROM cart WHERE ip_add='$ip_address'";
        return $this->db_query($sql);
    }

    public function getCartItemsAmount($ip_address)
    {
        $sql = "SELECT SUM(product_price * qty) AS amount FROM products AS p JOIN cart AS c ON p.product_id = c.p_id AND c.ip_add = '$ip_address'";
        return $this->db_query($sql);
    }

    public function addToCart($prod_id, $ip_adr, $qty)
    {
        // if (!$this->validateCart($ip_adr, $prod_id)) {
            $sql = "INSERT INTO `cart`(`p_id`, `ip_add`, `qty`) VALUES('$prod_id','$ip_adr','$qty')";
            return $this->db_query($sql);
        // }
    }

    public function validateCart($ip_address, $prod_id)
    {
        $sql = "SELECT * FROM `cart` WHERE `ip_add`='$ip_address' AND `p_id`='$prod_id'";
        return $this->db_query($sql);
    }

    public function removeCartItem($prod_id, $ip_address)
    {
        $sql = "DELETE FROM cart WHERE ip_add='$ip_address' AND p_id='$prod_id'";
        return $this->db_query($sql);
    }

    public function updateCartQuantity($prod_id, $qty, $ip_address)
    {
        $sql = "UPDATE cart SET qty='$qty' WHERE ip_add='$ip_address' AND p_id='$prod_id'";
        return $this->db_query($sql);
    }

    public function deletecart($ip_address)
    {
        $sql="DELETE FROM cart WHERE ip_add='$ip_address'";
        return $this->db_query($sql);
    }

    // ============ cart process ends here  ============


    public function insertorders($user_id, $prod_id, $qty, $invoice, $status)
    {
        $sql="INSERT INTO orders (customer_id, product_id, qty, invoice_no, status, order_date) VALUES ('$user_id', '$prod_id','$qty', '$invoice', '$status', NOW())";
        return $this->db_query($sql);
    }

    public function insertpayment($amount, $user_id, $cc)
    {
        $sql="INSERT INTO payment(amt,customer_id,currency, payment_date) VALUES ('$amount','$user_id','$cc', NOW())";
        return $this->db_query($sql);
    }
}
