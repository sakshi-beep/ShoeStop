<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$host = "localhost";
$user = "root";
$password = "";
$dbname = "stepup";
$connect = mysqli_connect($host, $user, $password, $dbname);
$total_products = mysqli_query($connect, "SELECT * FROM Shoes");
$total_customers = mysqli_query($connect, "SELECT * FROM customers");
$products_count = mysqli_num_rows($total_products);
$customers_count = mysqli_num_rows($total_customers);
$orders = mysqli_query($connect, "SELECT * from orders");
$orders_count = mysqli_num_rows($orders);
$sq = "SELECT
orders.order_id,
orders.status,
orders.payment_method,
Shoes.s_name,
Shoes.s_photo,
Shoes.s_category,
order_details.price,
order_details.size,
order_details.quantity,
order_details.id,
orders.shipping_address,
orders.status
FROM
orders
INNER JOIN order_details ON orders.order_id = order_details.order_id
INNER JOIN Shoes ON order_details.product_id = Shoes.s_id
where 
orders. is_active = '1';";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css?v=<?php echo time();?>" />
    <link rel="stylesheet" href="../css/addProduct.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="../css/adminSideBar.css?v=<?php echo time();?>">
    <script src="../js/navbarHamburger.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" defer></script>
    <title>Orders</title>
    <script src="../js/addProduct.js?v=223123123123" defer></script>
</head>
<body>
   <?php require '../includes/adminNav.php'; ?>
   <div style="display:flex">
   <?php require '../includes/adminSideBar.php'; ?>
<div id="orders-container">
            <?php
            $result = mysqli_query($connect, $sq);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $fullname ="Sakshi Thapa";
                    $email = "pakulithapa@gmail.com";
                    $order = $row['order_id'];
                    $payment_method = $row['payment_method'];
                    $shipping_address = $row['shipping_address'];
                    $status = $row["status"];
                    $productName = $row['s_name'];
                    $size = $row['size'];
                    $quantity = $row['quantity'];
                    $price = $row['price'];
                    $photo = $row['s_photo'];
           echo '<div class="orders-card">
                <div class="img-div">
                    <img src="' . $row['s_photo'] . '" class="product-img">
                </div>
                <div class="order-details">
                    <div class="details-container">
                        <p class="detail-title">Name</p>
                        <p class="detail-values">' . $row['s_name'] . '</p>
                    </div>
                    <div class="details-container">
                        <p class="detail-title">Size</p>
                        <p class="detail-values">' . $row['size'] . '</p>
                    </div>
                    <div class="details-container">
                        <p class="detail-title">Price</p>
                        <p class="detail-values">' . $row['price'] . '</p>
                    </div>
                    <div class="details-container">
                        <p class="detail-title">Quantity</p>
                        <p class="detail-values">' . $row['quantity'] . ' pairs</p>
                    </div>
                </div>
                <div class="redirect-icon" style="background-color:white">

                    <a class="product-button" id="delete-button" onclick="deleteOrder('.$order.')" href="#">Delete</a>
                </div>
            </div>';

                }
            } else {
                echo "No orders found.";
            }
            ?>
</div>
</body>
</html>