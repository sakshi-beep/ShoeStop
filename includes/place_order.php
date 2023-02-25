<?php
include "./dbconfig.php";
session_start();
// Prepare the SQL statement to insert order data
$total = $_SESSION['total_price'];
$user_id = $_SESSION['user_id'];
$shipping_address = $_POST['shipping_address'];
$payment_method = $_POST['payment_method'];
$sql_order = "INSERT INTO orders (user_id, shipping_address, payment_method) VALUES ('$user_id', '$shipping_address', '$payment_method')";

if ($connect->query($sql_order) === TRUE) {
    // Retrieve the order ID of the newly inserted order
    $order_id = $connect->insert_id;

    // Prepare the SQL statement to insert order details data
    foreach ($_SESSION['cart'] as $item) {
        $product_id = $item['id'];
        $product_size = $item['size'];
        $quantity = $item['quantity'];
        $price = $item['price'];
        $sql_order_details = "INSERT INTO order_details (order_id, product_id, product_size, quantity, price) VALUES ('$order_id', '$product_id', '$product_size', '$quantity', '$price')";

        if ($connect->query($sql_order_details) !== TRUE) {
            // Rollback the order insertion if order details insertion fails
            $sql_rollback = "DELETE FROM orders WHERE id='$order_id'";
            $connect->query($sql_rollback);
            break;
        }
    }

    // Clear the cart
    $_SESSION['cart'] = array();

    // Redirect to order confirmation page
    // header('Location: order_confirmation.php');
    exit();
} else {
    echo "Error: " . $sql_order . "<br>" . $connect->error;
}

$connect->close();