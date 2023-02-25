<?php

session_start();
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
        <form method="POST" action="place_order.php" class="checkout-form">
            <h4>Checkout</h4>
            <label for="shipping_address">Shipping Address:</label>
            <input type="text" name="shipping_address" required class="checkout-input">
            <br>
            <label for="payment_method">Payment Method:</label>
            <select name="payment_method" required>
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

    </div>
</body>

</html>