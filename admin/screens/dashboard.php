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
$sq = "SELECT
orders.order_id,
orders.status,
orders.payment_method,
orders.user_id,
Shoes.s_name,
Shoes.s_photo,
Shoes.s_category,
order_details.price,
order_details.size,
order_details.quantity,
order_details.id,
customers.fullname,
customers.email,
orders.shipping_address,
orders.status
FROM
orders
INNER JOIN order_details ON orders.order_id = order_details.order_id
INNER JOIN Shoes ON order_details.product_id = Shoes.s_id
INNER JOIN customers ON orders.user_id = customers.id
";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="content-container">
        <div class="modal" id="blah" onclick="changeVisibility()"
            style="position:absolute; display:none; width:100%; height:100%; z-index:1; background:transparent; align-items:center; justify-content:center">
        </div>
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
            <?php
            $result = mysqli_query($connect, $sq);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $fullname = $row['fullname'];
                    $order = $row['id'];
                    $email = $row['email'];
                    $payment_method = $row['payment_method'];
                    $shipping_address = $row['shipping_address'];
                    $status = $row["status"];
                    echo '<div class="orders-card" onclick="openOrderModal(\'' . $fullname . '\',\'' . $email . '\',\'' . $payment_method . '\',\'' . $status . '\',\'' . $shipping_address . '\', ' . $order . ')">
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
                    <a><img src="../images/arrow-right.svg" style="width:40px; background-color:white"></a>
                </div>
            </div>';
                }
            } else {
                echo "No orders found.";
            }

            ?>
        </div>


    </div>
    <script defer>
    const openOrderModal = (fullname, email, payment, status, shipping, order) => {
        const open = document.getElementById("blah");
        var isOpen = document.getElementById("blah").style.display;
        if (isOpen === "none") {
            document.getElementById("blah").style.display = "flex";
            console.log(isOpen)

            var modal = document.createElement("div");
            modal.classList.add("modal-container");
            modal.innerHTML = `
    <h1>Order Details</h1>
    <h2>Order by:</h2>
    <p>${fullname}</p>
    <h2>Email</h2>
    <p>${email}</p>
    <h2>Shipping Address</h2>
    <p>${shipping}</p>
    <h2>Payment Method</h2>
    <p>${payment}</p>
    <h2>status</h2>
    <p>${status}</p>
`;
            open.appendChild(modal);

        }

    }
    const changeVisibility = () => {
        var isOpen = document.getElementById("blah").style.display = "none";
    }
    </script>
</body>

</html>