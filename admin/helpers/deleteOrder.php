<?php
include '../../includes/dbconfig.php';

extract($_POST);

$id = $_POST['oid'];

$deleteProduct = mysqli_query($connect, "UPDATE orders SET `orders`.`is_active` = '0' WHERE `orders`.`order_id` = '$id'");


if($deleteProduct){
    echo 'success';
}
else{
    echo 'Sorry Failed to delete Order';
}