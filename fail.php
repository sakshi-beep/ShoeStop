<?php
session_start();

extract($_GET);
$address = $_GET['shipping_address'];
$payment = $_GET['payment_method'];
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
    <h1><?php echo $address; ?></h1>
    <h1><?php echo $payment; ?></h1>
</body>

</html>