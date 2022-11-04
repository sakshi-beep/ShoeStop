<?php
include '../../includes/dbconfig.php';

extract($_POST);
if(isset($_POST)){
    $name = $_POST['product-name'];
$category = $_POST['product-category'];
 $size = $_POST['product-size'];
 $featured = $_POST['product-featured'];
 $price = $_POST['product-price'];
 $quantity = $_POST['product-quantity'];
 $photo = $_POST['product-photo'];

 $query = mysqli_query($connect, "INSERT INTO Shoes (`s-id`, `s-name`, `s-category`, `s-size`, `s-price`, `s-quantity`, `s-photo`, `isFeatured`) VALUES (Default, '$name', '$category', '$size', '$price', '$quantity', '$photo', '$featured')");

 if($query){
    echo 'Product Added';
    return;
 }
 else{
    echo 'Failed to add product';
 }
}

?>