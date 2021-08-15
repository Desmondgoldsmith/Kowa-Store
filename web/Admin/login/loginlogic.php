<?php
session_start();
require "../main/backend/dbconnections.php";

// require('session.php');
if (isset($_POST['submit'])) {
 
 
  $email = trim($_POST['email']);
  $upass = trim($_POST['pass']);
  $h_upass = sha1($upass);
if ($upass == ''){
     ?>    <script type="text/javascript">
                alert("Password is missing!");
                window.location = "index.php";
                </script>
        <?php
}else{
//create some sql statement            
        $sql = "SELECT email,password FROM adminlogin WHERE email='$email' and password ='$upass'";
        $result = mysqli_query($conn, $sql);
        // echo $result;
        if ($result){
             //get the number of results based n the sql statement
        $numrows = mysqli_num_rows($result);
    
        //check the number of result, if equal to one  
        //IF theres a result
            if ($numrows) {
                //store the result to a array and passed to variable found_user
                $found_user  = mysqli_fetch_array($result);
 
                //fill the result to session variable
                // $_SESSION['MEMBER_ID']  = $found_user['id'];
                $_SESSION['name'] = $found_user['name'];
                // $_SESSION['LAST_NAME']  =  $found_user['lName'];
          
             ?>    <script type="text/javascript">
                      //then it will be redirected to index.php
                      window.location = "../main/examples/dashboard.php";
                  </script>
             <?php        
          
        
            } else {
            //IF theres no result
              ?>    <script type="text/javascript">
                alert("Username or Password Not Registered! Contact Your administrator.");
                window.location = "index.php";
                </script>
        <?php
 
            }
 
         } else {
                 # code...
         die("Table Query failed: " );
        }
        
    }      
}
?>