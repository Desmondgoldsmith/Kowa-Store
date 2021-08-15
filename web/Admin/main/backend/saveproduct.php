<?php
    include ('dbconnections.php');

    
    $statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["image"]["name"])){
    $productname = $_POST['pname'];
    $slashedprice = $_POST['sprice'];
    $newprice = $_POST['nprice'];
    $category = $_POST['selcategory'];
 
    if($category === "Select The Product Category ^"){
        echo '<script type="text/javascript"> alert("Select a Category"); </script>';  // alert message
        echo "<script>window.location = '../examples/addprod.php'</script>";
exit();
    }
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','PNG');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $conn=mysqli_connect("localhost","root","","shopify");
         
            $check = mysqli_query($conn,"insert into `products`(`productname`,`category`,`oldprices`,`newprice`,`picture`) values('$_POST[pname]','$_POST[selcategory]','$_POST[sprice]','$_POST[nprice]','$fileName')");  // executing insert query
		
            if($check)
            {
                echo '<script type="text/javascript"> alert("Data Inserted Seccessfully!"); </script>';  // alert message
                echo "<script>window.location = '../examples/addprod.php'</script>";

            }
            else
            {
                echo '<script type="text/javascript"> alert("Error Uploading Data!"); </script>';  // when error occur
            }
         
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';

}
mysqli_close($conn);
// Display status message
echo $statusMsg;