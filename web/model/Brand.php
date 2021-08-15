<?php
// require_once('../settings/db_class.php');
trait BrandTrait
{

    function create_brand($brand)
    {

        $sql = "INSERT into brands(`brand_name`) VALUES('$brand')";
        return $this->db_query($sql);
    }


    function get_brands()
    {
        $sql = 'SELECT * FROM brands';
        return $this->db_query($sql);
    }

    function geOneBrand($id)
    {
        $sql = "SELECT * FROM brands WHERE `brand_id`= '$id'";
        return $this->db_query($sql);
    }

    function delete_brand($id)
    {
        $sql = "DELETE FROM brands WHERE `brand_id`= '$id'";
        return $this->db_query($sql);
    }


    function update_brand($brand, $id)
    {
        $sql = "UPDATE brands SET `brand_name` = '$brand' WHERE `brand_id`= '$id'";
        return $this->db_query($sql);
    }
}



