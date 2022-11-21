<?php
include '../../includes/dbconfig.php';

extract($_POST);

$id = $_POST['id'];
$deleteProduct = mysqli_query($connect, "DELETE FROM Shoes WHERE `Shoes`.`s_id` = '$id'");


if($deleteProduct){
    echo 'Product Deleted';
}
else{
    echo 'Sorry Failed to delete Product';
}