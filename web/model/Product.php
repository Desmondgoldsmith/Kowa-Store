<?php
// require_once('../settings/db_class.php');

require __DIR__.'/../settings/db_class.php';
require_once( 'Brand.php');
require_once('Category.php');



class ProductModel extends db_connection

{

// TODO: customerModel, adminAdmin, 
    use BrandTrait, CategoryTrait;

    public function add_new_product($product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_image)
    {

        //Write the insert sql
        $sql = "INSERT INTO products(product_cat, product_brand, product_title, product_price, product_desc, product_image) VALUES('$product_cat', '$product_brand', '$product_title', '$product_price', '$product_desc', '$product_image')";
        //execute the sql and return boolean
        
        return $this->db_query($sql);
    }

    public function view_all_products()
    {
        //a query to get all products
        $sql = "SELECT * FROM products";

        //execute the query and return boolean
        return $this->db_query($sql);
    }

    public function view_products($category)
    {
        //a query to get all products
        $sql = "SELECT * FROM products where category='$category'";

        //execute the query and return boolean
        return $this->db_query($sql);
    }


    public function update_one_product($category_id, $brand_id, $prod_title, $prod_price, $prod_desc, $fileName, $product_id)
    {
        //a query to update a product
        $sql = "UPDATE products
                        SET `product_title`='$prod_title',
                            `product_cat`='$category_id',
                            `product_brand`='$brand_id',
                            `product_desc`='$prod_desc' ,
                            `product_price`='$prod_price',
                            `product_image`='$fileName'
                WHERE product_id='$product_id'";

        //execute the query and return boolean
        return $this->db_query($sql);
    }

    /**
     *method to delete a product using an id
     *takes the id
     */
    public function delete_one_product($a)
    {
        //a query to delete product using an id
        $sql = "DELETE from products WHERE product_id=$a";

        //execute the query and return boolean
        return $this->db_query($sql);
    }

    public function get_one_product($a)
    {
        //a query to delete product using an id
        $sql = "SELECT * FROM `products` WHERE product_id=$a";

        //execute the query and return boolean
        return $this->db_query($sql);
    }


    public function search_a_product($sterm)
    {
        //a query to search product matching term
        $sql = "SELECT * FROM products WHERE product_title LIKE '%$sterm%'";

        //execute the query and return boolean
        return $this->db_query($sql);
    }




}



?>