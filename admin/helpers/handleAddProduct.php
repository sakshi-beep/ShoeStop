<?php
include '../../includes/dbconfig.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
extract($_POST);
if(isset($_POST)){
    $name = $_POST['product-name'];
$category = $_POST['product-category'];
 $size = $_POST['product-size'];
 $featured = $_POST['product-featured'];
 $price = $_POST['product-price'];
 $quantity = $_POST['product-quantity'];
 $photo = $_POST['product-photo'];

 $query = mysqli_query($connect, "INSERT INTO Shoes (`s_id`, `s_name`, `s_category`, `s_size`, `s_price`, `s_quantity`, `s_photo`, `isFeatured`) VALUES (Default, '$name', '$category', '$size', '$price', '$quantity', '$photo', '$featured')");

 if($query){
    echo 'Product Added';
    return;
 }
 else{
    echo 'Failed to add product';
 }
}

?>