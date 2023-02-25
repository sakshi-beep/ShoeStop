<?php

session_start();

$total = $_SESSION['total_price'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="../css/checkout.css" />
</head>

<body>
    <?php include "../includes/nav.php" ?>
    <div class="checkout">
        <div class="cart">
            <table>
                <tr class="identifier_row">
                    <th>Product</th>
                    <th>Name</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>

                <?php


                foreach ($_SESSION['cart'] as $item) {

                    echo "  <tr class='product_row'>
  <td><img src='" . $item['photo'] . "' alt='product2' class='product-img'></td>
  <td>" . $item['name'] . "</td>
  <td>" . $item['size'] . "</td>
  <td>" . $item['quantity'] . "</td>
  <td>" . $item['price'] . "</td>
</tr>";
                }
                ?>
            </table>
        </div>
        <form class="checkout-form" action="../includes/order.php" method="POST">
            <h4>Checkout</h4>
            <label for="shipping_address">Shipping Address:</label>
            <input type="text" name="shipping_address" required class="checkout-input">
            <br>
            <label for="payment_method">Payment Method:</label>
            <select name="payment_method" required id="select">
                <option value="">Select Payment Method</option>
                <option value="e-sewa">eSewa</option>
                <option value="khalti">Khalti</option>
            </select>
            <br>
            <label for="total_price">Total Price:</label>
            <input type="text" name="total_price" value="<?php echo $_SESSION['total_price']; ?>" readonly
                class="checkout-input">
            <button type="submit" class="order-btn">Place Order</button>
        </form>
        <form action="https://uat.esewa.com.np/epay/main" method="POST">
            <input value="<?php echo $_SESSION['total_price']; ?>" name="tAmt" type="hidden">
            <input value="<?php echo $_SESSION['total_price']; ?>" name="amt" type="hidden">
            <input value="0" name="txAmt" type="hidden">
            <input value="0" name="psc" type="hidden">
            <input value="0" name="pdc" type="hidden">
            <input value="EPAYTEST" name="scd" type="hidden">
            <input value="ee2c3ca1-696b-4cc5-a6be-2c40d929d453" name="pid" type="hidden">
            <input value="http://merchant.com.np/page/esewa_payment_success?q=su" type="hidden" name="su">
            <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
            <input value="Submit" type="submit">
        </form>

    </div>
    <script defer>
    const placeOrder = () => {
        alert(<?php echo $_SESSION['total_price'] ?>);
    }
    </script>
</body>

</html>