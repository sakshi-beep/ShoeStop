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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
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
            <input type="text" name="total_price" value="<?php echo $_SESSION['total_price']; ?>" readonly
                class="checkout-input">
            <button id="payment-button" class="order-btn" onclick="proceedPayment()"
                style="display:none; justify-content:center; background-color:#462669">Pay with
                Khalti</button>
            <button type="submit" id="esewa" class="order-btn" onclick="esewaPayment()"
                style="width:100%; background-color:#60BB46; display:none; justify-content:center">Pay with
                esewa</button>
        </div>

    </div>
    <script>
    const select = document.getElementById("select");
    const esewabutton = document.getElementById("esewa").style;
    const khaltibutton = document.getElementById("payment-button").style;
    select.onchange = function() {
        if (select.value === 'khalti' && khaltibutton.display == "none") {
            khaltibutton.display = "flex"
            esewabutton.display = "none"

            document.getElementById("payment-button").innerHTML = "Pay with Khalti"
        }
        if (select.value === "e-sewa" && esewabutton.display === "none") {
            esewabutton.display = "flex"
            khaltibutton.display = "none"

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
                        console.log(result)
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

    const esewaPayment = () => {
        const payment_method = document.getElementById("select").value;
        const shipping_address = document.getElementById("shipping_address").value
        var path = "https://uat.esewa.com.np/epay/main";
        var params = {
            amt: "<?php echo $total ?>",
            psc: 0,
            pdc: 0,
            txAmt: 0,
            tAmt: "<?php echo $total ?>",
            pid: "<?php echo $id; ?>",
            scd: "EPAYTEST",
            su: `http://localhost/shoestop/includes/esewa.php?q=su&payment_method=${payment_method}&shipping_address=${shipping_address}`,
            fu: `http://localhost/shoestop/fail.php?q=fu&payment_method=${payment_method}&shipping_address=${shipping_address}`
        }

        function post(path, params) {
            var form = document.createElement("form");
            form.setAttribute("method", "POST");
            form.setAttribute("action", path);

            for (var key in params) {
                var hiddenField = document.createElement("input");
                hiddenField.setAttribute("type", "hidden");
                hiddenField.setAttribute("name", key);
                hiddenField.setAttribute("value", params[key]);
                form.appendChild(hiddenField);
            }

            document.body.appendChild(form);
            form.submit();
        }
        post(path, params);
    }
    </script>
</body>

</html>