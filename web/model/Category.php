
<?php

trait CategoryTrait
{
    function add_product_category($category)
    {
        $sql="INSERT into categories(`cat_name`) VALUES('$category')";
        return $this->db_query($sql);
    }

    function get_categories(){
        $sql = 'SELECT * FROM categories';
        return $this->db_query($sql);
    }

    function get_one_category($id){
        $sql = "SELECT * FROM categories WHERE `cat_id`= '$id'";
        return $this->db_query($sql);
    }


    function get_category_name($cat_id){
        $sql = "SELECT cat_name FROM categories WHERE `cat_id` = '$cat_id'";
        return $this->db_query($sql);
    }

    function delete_category($id){
        $sql = "DELETE FROM categories WHERE `cat_id`= '$id'";
        return $this->db_query($sql);
    }


    function update_category($cat,$id){
        $sql = "UPDATE categories SET `cat_name` = '$cat' WHERE `cat_id`= '$id'";
        return $this->db_query($sql);
    }


}