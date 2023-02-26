<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$host = "localhost";
$user = "root";
$password = "";
$dbname = "shoe-stop";
$connect = mysqli_connect($host, $user, $password, $dbname);
$total_products = mysqli_query($connect, "SELECT * FROM Shoes");
$total_customers = mysqli_query($connect, "SELECT * FROM customers");
$products_count = mysqli_num_rows($total_products);
$customers_count = mysqli_num_rows($total_customers);
$orders = mysqli_query($connect, "SELECT * from orders");
$orders_count = mysqli_num_rows($orders);
?>

<div id="content-container">
    <label class="container-title">Dashboard</label>
    <div id="cards-container">

        <div class="card">
            <img src="../images/admin-orders.svg" style="width:43px; background:none;">
            <p class="card-title">Total orders</p>
            <p class="card-count"><?php echo $orders_count; ?></p>
        </div>
        <div class="card">
            <img src="../images/userlogo.svg" style="width:43px; background:none">
            <p class="card-title">Total users</p>
            <p class="card-count"><?php echo $customers_count; ?></p>
        </div>
        <div class="card">
            <img src="../images/admin-products.svg" style="width:43px; background:none">
            <p class="card-title">Total products</p>
            <p class="card-count"><?php echo $products_count ?></p>
        </div>
    </div>

    <label class="container-title" style="margin-top:20px; margin-bottom:20px">Orders</label>
    <div id="orders-container">
        <div class="orders-card">
            <div class="img-div">
                <img src="../images/nike.jpg" class="product-img">
            </div>
            <div class="order-details">
                <div class="details-container">
                    <p class="detail-title">Name</p>
                    <p class="detail-values">Nike sports</p>
                </div>
                <div class="details-container">
                    <p class="detail-title">Size</p>
                    <p class="detail-values">20</p>
                </div>
                <div class="details-container">
                    <p class="detail-title">Price</p>
                    <p class="detail-values">1200</p>
                </div>
                <div class="details-container">
                    <p class="detail-title">Quantity</p>
                    <p class="detail-values">1 pairs</p>
                </div>
            </div>
            <div class="redirect-icon" style="background-color:white">
                <a><img src="../images/arrow-right.svg" style="width:40px; background-color:white"></a>
            </div>
        </div>
    </div>


</div>