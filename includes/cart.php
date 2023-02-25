<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include '../includes/dbconfig.php';
extract($_POST);
$id = $_POST['s_id'];
$name = $_POST['s_name'];
$photo = $_POST['s_photo'];
$category = $_POST['s_category'];
$price = $_POST['s_price'];
$size = $_POST['s_size'];
$quantity = $_POST['s_quantity'];


if (empty($_SESSION['fullname'])) {
    echo 'not logged in';
} else {
    foreach ($_SESSION['cart'] as $data) {
        if ($data['id'] === $id) {
            echo 'item already exists ';
            return;
        }
    }
    $_SESSION['cart'][] = array(
        'id' => $id,
        'name' => $name,
        'photo' => $photo,
        'category' => $category,
        'price' => $price,
        'size' => $size,
        'quantity' => $quantity
    );
}