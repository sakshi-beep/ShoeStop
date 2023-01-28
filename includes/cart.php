<?php
session_start();
include '../includes/dbconfig.php';
extract($_POST);
$id = $_POST['s_id'];
$name=$_POST['s_name'];
$photo = $_POST['s_photo'];
$category=$_POST['s_category'];
$price=$_POST['s_price'];
$size=$_POST['s_size'];
$quantity=$_POST['s_quantity'];


if(empty($_SESSION['fullname'])) {
   echo 'not logged in';
}
else {
$_SESSION['cart'][] = array(
    'id' => $id,
    'name' => $name,
    'photo'=>$photo,
    'category'=>$category,
    'price' => $price,
    'size'=>$size,
    'quantity' => $quantity
);

$num = count($_SESSION['cart']);
 echo $num;

}

?>