<?php session_start();
if (isset($_SESSION['cart'])) {
    $count = count($_SESSION['cart']);
} else {
    header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script defer src="../js/cart.js?v=2345432"></script>
    <link rel="stylesheet" href="../css/cart.css?v<?php echo time() ?>" />
    <link rel="stylesheet" href="../css/nav.css">
    <title>Cart Screen</title>
</head>

<body class="main-body">
    <?php include "../includes/nav.php" ?>
    <div class="cart-container">
        <div class="cart">
            <h2>Cart</h2>
            <table>
                <tr class="identifier_row">
                    <th>Product</th>
                    <th>Name</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>

                <?php


                foreach ($_SESSION['cart'] as $item) {

                    echo "  <tr class='product_row'>
  <td><img src='" . $item['photo'] . "' alt='product2' class='product-img'></td>
  <td>" . $item['name'] . "</td>
  <td>" . $item['size'] . "</td>
  <td class='cart-td'><button class='quantity-btn' onclick=" . 'updateQuantity(' . $item['id'] . ',' . $item['quantity'] . ',"decrement")' . ">-</button>" . $item['quantity'] . "<button class='quantity-btn' onclick=" . 'updateQuantity(' . $item['id'] . ',' . $item['quantity'] . ',"increment")' . ">+</button></td>
  <td>" . $item['price'] . "</td>
  <td class='action'>
    <button onclick = 'deleteCartItem(" . $item['id'] . ")' ><img src='../images/x-circle.svg'/></button>
  </td>
</tr>";

                    $price += $item['price'];
                }
                $_SESSION['total_price'] = $price;
                ?>
                <?php if ($count < 1) {
                    echo "<tr>
    <td style='height:48px; width:100%;'>
    No Items available
    </td>
    </tr>
    ";
                } ?>
            </table>
        </div>
        <div class="checkout-container">
            <h4>Order Summary</h4>
            <div class="checkout-details">
                <div class="checkout-items">
                    <p><?php echo $count; ?></p><span>items</span>

                </div>
                <div class="checkout-price">

                    <span>Rs. </span>
                    <p style="background-color: white;"><?php echo $price; ?></p>
                </div>

            </div>
            <div class="total">
                <p>Total</p>
                <span>Rs. <?php echo $price; ?></span>
            </div>
            <?php if ($count >= 1) {

                echo "<button class='checkout-button' onclick='checkout()'>Proceed to Checkout</button>";
            }
            ?>
        </div>
    </div>
    <?php include "../includes/footer.php" ?>

</body>

</html>