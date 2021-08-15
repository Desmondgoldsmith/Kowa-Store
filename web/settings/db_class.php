<?php
//database

//database credentials
// require_once('db_cred.php');

require __DIR__.'./db_cred.php';


class db_connection
{
    //properties
    public $db = null;
    public $results = null;

    //connect
    /**
     *Database connection
     *@return bolean
     **/
    function db_connect(){
        //connection
        $this->db = mysqli_connect(SERVER,USERNAME,PASSWD,DATABASE);
        //test the connection
        if (mysqli_connect_errno()) {
            return false;
        }else{
            return true;
        }
    }

    //execute a query
    /**
     *Query the Database
     *@param takes a connection and sql query
     *@return bolean
     **/
    function db_query($sqlQuery){
        if (!$this->db_connect()) {
            return false;
        }
        elseif ($this->db==null) {
            return false;
        }

        //run query
        $this->results = mysqli_query($this->db,$sqlQuery);
        if ($this->results == false) {
            return false;
        }else{
            return true;
        }

    }

    //fetch data
    /**
     *get select data
     *@return a record
     **/
    function db_fetch(){
        //check if result was set
        if ($this->results == null) {
            return false;
        }
        elseif ($this->results == false) {
            return false;
        }
        //return a record
        return mysqli_fetch_assoc($this->results);

    }

    //count data
    /**
     *get select data
     *@return a count
     **/
    function db_count(){
        //check if result was set
        if ($this->results == null) {
            return false;
        }
        elseif ($this->results == false) {
            return false;
        }

        //return a record
        return mysqli_num_rows($this->results);

    }

    //A method that returns the just inserted id
    /**
     *Query the Database
     *@param takes a connection and sql query
     *@return returns the just inserted id
     * the method to use on the db property is mysqli_insert_id().
     * the above method returns the just inserted id
     **/
    function db_query_id($sqlQuery){
        //check connection
        if (!$this->db_connect()) {
            return false;
        }
        elseif ($this->db==null) {
            return false;
        }

        //check db

        $this->results = mysqli_query($this->db,$sqlQuery);
        if ($this->results == false) {
            return false;
        }else{
            return true;
        }

        $a = mysql_fetch_row($this->db,$sqlQuery);
        $this->results=$a['customer_id'];
        //return the just inserted id

    }

}
?>