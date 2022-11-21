<?php
include '../../includes/dbconfig.php';
extract($_POST);
$id = $_POST['id'];
$getProduct = mysqli_query($connect, "SELECT * FROM Shoes where s_id = '35'");

$product = $getProduct->fetch_array();

echo $product['s_name'];
echo $product['s_size'];


?>