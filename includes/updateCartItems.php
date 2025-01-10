<?php
include './dbconfig.php';
session_start();
extract($_POST);
$id = $_POST['id'];
$quantity = $_POST['quantity'];

$cartItems = $_SESSION['cart'];

foreach($cartItems as &$value){
    if($value['id']==$id){
        $price = $value['price']/$value['quantity'];
        $value['quantity'] = $quantity;
        $value['price'] = $price*$value['quantity'];
        break;
    }
}
$_SESSION['cart'] = $cartItems;
unset($value);
echo "success";

?>