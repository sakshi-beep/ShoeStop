<?php
include '../../includes/dbconfig.php';
extract($_POST);

$s_id = $_POST['s_id'];
$s_name = $_POST['s_name'];
$s_category = $_POST['s_category'];
$s_photo = $_POST['s_photo'];
$s_size = $_POST['s_size'];
$s_price = $_POST['s_price'];
$s_quantity = $_POST['s_quantity'];
$isFeatured = $_POST['isFeatured'];
$in_stock = $_POST['in_stock']; 

// $query = mysqli_query($connect, "UPDATE INTO Shoes (`s_id`, `s_name`, `s_category`, `s_size`, `s_price`, `in_stock`, `s_quantity`, `s_photo`, `isFeatured`) VALUES (Default, '$s_name', '$s_category', '$s_size', '$s_price', '$in_stock', '$s_quantity', '$s_photo', '$isFeatured') WHERE `Shoes`.`s_id` = '$s_id'");
$query = mysqli_query($connect, "UPDATE  Shoes SET `s_id` = DEFAULT, `s_name` ='$s_name', `s_category`='$s_category', `s_size`='$s_size', `s_price`= '$s_price', `in_stock`='$in_stock', `s_quantity`= '$s_quantity', `s_photo`='$s_photo', `isFeatured`= '$isFeatured' WHERE `Shoes`.`s_id` = '$s_id'");

if($query){
    echo 'Product Updated';
    
 }
 else{
    echo 'Failed to update product';
 }

?>