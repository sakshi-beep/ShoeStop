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
    <link rel="stylesheet" href="../css/nav.css">
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
</head>

<body class="checkout-body">
    <?php include "../includes/nav.php" ?>
    <div class="checkout">
        <?php foreach ($_SESSION['cart'] as $checkout) {

            $id = $checkout['id'];
            $name = $checkout['name'];
        }
        ?>
        <form class="checkout-form">
            <h4>Checkout</h4>
            <label for="shipping_address">Shipping Address:</label>
            <input type="text" name="shipping_address" required class="checkout-input" id="shipping_address">
            <br>
            <label for="payment_method">Payment Method:</label>
            <select name="payment_method" required id="select">
                <option value="">Select Payment Method</option>
                <option value="cod">Cash on Delivery</option>
                <option value="e-sewa" id="esewa">e-Sewa</option>
                <option value="khalti" id="khalti">Khalti</option>
            </select>
            <br>
            <label for="total_price">Total Price:</label>
            <input type="text" name="total_price" value="<?php echo $_SESSION['total_price']; ?>" readonly class="checkout-input">
            <button class="order-btn" id="btn" type="submit"> Place Order</button>
        </form>

    </div>
    <script defer>
        const orderbutton = document.getElementById("btn");

        orderbutton.onclick = function() {
            const payment_method = document.getElementById("select").value;
            const shipping_address = document.getElementById("shipping_address").value
            if (payment_method === "khalti") {

                proceedPayment(payment_method, shipping_address)
            } else if (payment_method === "e-sewa") {
                esewaPayment(payment_method, shipping_address)
            } else if (payment_method === "cod") {
                $.post("../includes/order.php", {
                    shipping_address: shipping_address,
                    payment_method: payment_method
                }, result => {
                    if (result == "payment successfull") {
                        window.location.href = "../success.php"
                    }
                })
            }
        }

        const proceedPayment = (p, s) => {
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
                            shipping_address: s,
                            payment_method: p
                        }, result => {
                            if (result == "payment successfull") {
                                window.location.href = "../success.php"
                            }
                        })
                        console.log(payload)
                    },
                    onError(error) {
                        if (result == "payment successfull") {
                            window.location.href = "../success.php"
                        };
                    },
                    onClose() {
                        console.log('widget is closing');
                    }
                }
            };

            var checkout = new KhaltiCheckout(config);
            event.preventDefault();
            checkout.show({
                amount: <?php echo $total; ?>
            })
        }

        const esewaPayment = (p, s) => {
            event.preventDefault();
            var path = "https://uat.esewa.com.np/epay/main";
            var params = {
                amt: <?php echo $total ?>,
                psc: 0,
                pdc: 0,
                txAmt: 0,
                tAmt: <?php echo $total ?>,
                pid: <?php echo $id; ?>,
                scd: "EPAYTEST",
                su: `http://localhost/shoestop/includes/esewa.php?q=su&payment_method=${p}&shipping_address=${s}`,
                fu: `http://localhost/shoestop/fail.php?q=fu&payment_method=${p}&shipping_address=${s}`
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
    <?php include "../includes/footer.php" ?>
</body>

</html>