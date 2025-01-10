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
$orders = mysqli_query($connect, "SELECT * from orders join order_details on orders.order_id = order_details.order_id WHERE orders.is_active='1'");
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
where orders.is_active = '1'
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
<style>
.modal-container {
  padding: 20px;
  width: 350px;
  border-radius:20px;
  display:flex;
  flex-direction:column;
  gap:20px;
  box-shadow: 0px 3px 67px 8px rgba(0,0,0,0.32);
-webkit-box-shadow: 0px 3px 67px 8px rgba(0,0,0,0.32);
-moz-box-shadow: 0px 3px 67px 8px rgba(0,0,0,0.32);
  background-color: white;
}
</style>
<body>
    <div id="content-container">
        <div class="modal" id="modal" onclick="changeVisibility()"
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
                    $fullname ="Sakshi Thapa";
                    $email = "pakulithapa@gmail.com";
                    $order = $row['id'];
                    $payment_method = $row['payment_method'];
                    $shipping_address = $row['shipping_address'];
                    $status = $row["status"];
                    $productName = $row['s_name'];
                    $size = $row['size'];
                    $quantity = $row['quantity'];
                    $price = $row['price'];
                    $photo = $row['s_photo'];
                    // $drive = "$fullname,$email, $payment_method, $status, $shipping_address, $order,$productName,$size, $price, $quantity, $photo";
           echo '<div class="orders-card" onclick="openOrderModal(\'' . $fullname . '\',\'' . $email . '\',\'' . $payment_method . '\',\'' . $status . '\',\'' . $shipping_address . '\', \'' . $order . '\', \'' . $productName. '\', \'' . $size . '\', ' . $price. ', ' . $quantity. ', \'' . $photo. '\')">
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
    const openOrderModal = (fullname, email, payment, status, shipping, order, name, size, price, quantity, photo) => {
        const open = document.getElementById("modal");
        var isOpen = document.getElementById("modal").style.display;
        if (isOpen === "none") {
            document.getElementById("modal").style.display = "flex";
            var modal = document.createElement("div");
            modal.classList.add("modal-container");
            modal.innerHTML = `
                    <p style="font-size:20px; font-weight:600">Order</p>
    <div class="product-img-container" style="display:flex; width:100%; gap:20px;">
        <div style="width: 80px; width:80px;">
        <img src="${photo}" alt="" style="height:100%; width:100%; object-fit: cover;">
        </div>
        <div style="display:flex; flex-direction:column;gap:10px;">
        <p style="font-size:14px; font-weight:600">${name}</p>
        <p>Size <span>${size}</span></p>
        </div>
    </div>
<div style="display:flex; justify-content:space-between; width:100%;">
    <p style="font-size:14px; font-weight:600;">Qty ${quantity}</p>
    <p style="font-size:14px; font-weight:600">${price} Rs</p>
</div>
<div style="display:flex; flex-direction:column; gap:10px;">
<p style="font-size:16px; font-weight:600">Shipping</p>
<p style="font-size:14px; font-weight:500">${shipping}</p>
</div>
`;           
            open.childNodes.forEach(child=>{
                open.removeChild(child)
            })
            open.appendChild(modal);

        }

    }
    const changeVisibility = () => {
        var isOpen = document.getElementById("modal").style.display = "none";
    }
    </script>
</body>

</html>