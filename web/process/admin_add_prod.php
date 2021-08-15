<?php
require_once('../controller/product_controller.php');

if(isset($_POST['add_product'])){
    
   
function uploadImage(){
    // where to store the image
    $folderName = "../images/uploads/";

    $fileName = $folderName . basename($_FILES["image"]["name"]);
    // $uploadOk = 1;

    // check for file type [png, jpeg,jpg]
    $imageFileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    if (isset($_POST['add_product'])) {

// check for files size
        $fileDimensions = getimagesize($_FILES["image"]["tmp_name"]);

        // check if file exist
        if (file_exists($fileName)) {
            echo "File already exist!";
            exit;
        }
        // check for file size
        if ($_FILES["image"]["size"] > 5000000) {
            echo "File size too big!";
            
        }


        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif") {
            echo "File type not supported!";
            exit;
        }


        if (move_uploaded_file($_FILES["image"]["tmp_name"], $fileName)) {
            echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
        }
    }
}


    uploadImage();

    //  get form data
        $name = $_POST['pname'];
        $category = $_POST['selcategory'];
        $brands = $_POST['selbrand'];
        $price = $_POST['price'];
       
        $description = $_POST['description'];


    $folderName = "./images/uploads/";

    $fileName = $folderName . basename($_FILES["image"]["name"]);

    $check = (new productController())->add_new_product($category, $brands, $name, $price, $description, $fileName);
// redirect to previous page if successful, else echo error
// return $check = $check ?: $_SERVER['HTTP_REFERER'];

if($check) header('Location: ../Admin/main/examples/addprod.php');
// echo "<script>window.location='../Admin/main/examples/addprod.php'</script>";
   

    
}

