<?php
include './dbconfig.php';
session_start();
extract($_POST);
$id = $_POST['id'];

$cartItems = $_SESSION['cart'];


$newArray = array_filter($cartItems, function($value) use ($id) {
    return ($value['id'] != $id);
});

$_SESSION['cart'] = $newArray;

print_r($newArray);


?>