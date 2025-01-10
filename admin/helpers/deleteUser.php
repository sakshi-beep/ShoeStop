<?php
include '../../includes/dbconfig.php';

extract($_POST);

$id = $_POST['uid'];

$deleteUser= mysqli_query($connect, "UPDATE customers SET `customers`.`is_active` = '0' WHERE `customers`.`id` = '$id'");


if($deleteUser){
    echo 'success';
}
else{
    echo 'Sorry Failed to delete Users';
}