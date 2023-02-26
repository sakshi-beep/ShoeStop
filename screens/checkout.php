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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" defer></script>
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
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

                    $name = $item['name'];
                    $id = $item['id'];
                }
                ?>
            </table>
        </div>
        <div class="checkout-form">
            <h4>Checkout</h4>
            <label for="shipping_address">Shipping Address:</label>
            <input type="text" name="shipping_address" required class="checkout-input" id="shipping_address">
            <br>
            <label for="payment_method">Payment Method:</label>
            <select name="payment_method" required id="select">
                <option value="">Select Payment Method</option>
                <option value="e-sewa">eSewa</option>
                <option value="khalti">Khalti</option>
            </select>
            <br>
            <label for="total_price">Total Price:</label>
            <input type="text" name="total_price" value="<?php echo $_SESSION['total_price']; ?>" readonly class="checkout-input">
            <button id="payment-button" class="order-btn" onclick="proceedPayment()">Place Order</button>
            <!-- <button class="order-btn" onclick="proceedPayment()">Place Order</button> -->
        </div>
    </div>
    <script>
        const select = document.getElementById("select");
        select.onchange = function() {
            if (select.value === 'khalti') {
                document.getElementById("payment-button").style.backgroundColor = "#5E338D"
                document.getElementById("payment-button").innerHTML = "Pay with Khalti"

            }
            if (select.value === "e-sewa") {
                document.getElementById("payment-button").style.backgroundColor = "#60BB46"
                document.getElementById("payment-button").innerHTML = "Pay with e-sewa"
            }
        }

        const proceedPayment = () => {
            const payment_method = document.getElementById("select").value;
            const shipping_address = document.getElementById("shipping_address").value
            var config = {
                "publicKey": "test_public_key_1059426c6e474dcd8aba71df6f39df8f",
                "productIdentity": "<?php echo $id ?>",
                "productName": "<?php echo $name; ?>",
                "productUrl": "http://localhost/products.php",
                "paymentPreference": [
                    "KHALTI",
                ],
                "eventHandler": {
                    onSuccess(payload) {
                        $.post("../includes/order.php", {
                            shipping_address: shipping_address,
                            payment_method: payment_method
                        }, result => {
                            if (result === "payment successfull")
                                alert(result);
                            window.location.href = "../index.php";
                        })
                        console.log(payload)
                    },
                    onError(error) {
                        console.log(error);
                    },
                    onClose() {
                        console.log('widget is closing');
                    }
                }
            };

            var checkout = new KhaltiCheckout(config);
            var btn = document.getElementById("payment-button");
            btn.onclick = function(event) {
                event.preventDefault();
                checkout.show({
                    amount: <?php echo $total; ?>
                });
            }
        }
    </script>
</body>

</html>