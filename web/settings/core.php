<?php

trait Core{

   function getIP(){
    
    if(!empty($_SERVER['HTTP_CLIENT_IP']) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    
       return $ip = $_SERVER['HTTP_CLIENT_IP'] ?? $_SERVER['HTTP_X_FORWARDED_FOR'] ;
    
    // elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    // {
    //     $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    // }

    // return $ip;
}


}