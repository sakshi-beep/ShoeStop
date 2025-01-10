<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "./dbconfig.php";

extract($_POST);
$total = $_SESSION['total_price'];
$address = $_POST['shipping_address'];
$customerid = $_SESSION['user_id'];
$payment = $_POST['payment_method'];

// Insert into orders table
$sql = "INSERT INTO orders(status, shipping_address, payment_method, total) VALUES('pending', '$address', '$payment', '$total')";
$blah = mysqli_query($connect, $sql);

if ($blah) {
    // Fetch the last inserted order_id
    $sql2 = "SELECT order_id FROM orders ORDER BY order_id DESC LIMIT 1";
    $result = mysqli_query($connect, $sql2);

    if ($result && mysqli_num_rows($result) > 0) {
        $final = mysqli_fetch_assoc($result);
        $orderid = $final['order_id'];

        // Insert into order_details table
        foreach ($_SESSION['cart'] as $key => $value) {
            $proid = $value['id'];
            $quantity = $value['quantity'];
            $size = $value['size'];
            $price = $value['price'];

            $sql3 = "INSERT INTO order_details(order_id, product_id, quantity, price, size) VALUES('$orderid', '$proid', '$quantity', '$price', '$size')";
            mysqli_query($connect, $sql3);
        }

        // Clear session data
        unset($_SESSION['total_price']);
        unset($_SESSION['cart']);

        echo "Payment successful";
    } else {
        echo "Error fetching order ID: " . mysqli_error($connect);
    }
} else {
    echo "Error inserting order: " . mysqli_error($connect);
}

// Close connection
mysqli_close($connect);
?>
