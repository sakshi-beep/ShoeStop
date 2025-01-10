<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$host = "localhost";
$user = "root";
$password = "";
$dbname = "stepup";
$connect = mysqli_connect($host, $user, $password, $dbname);
$sq = "SELECT
*
FROM
customers
where is_active = '1'
";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css?v=<?php echo time();?>" />
    <link rel="stylesheet" href="../css/addProduct.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="../css/adminSideBar.css?v=<?php echo time();?>">
    <script src="../js/navbarHamburger.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" defer></script>
    <title>Orders</title>
    <script src="../js/addProduct.js?v=223123123123" defer></script>
</head>
<body>
   <?php require '../includes/adminNav.php'; ?>
   <div style="display:flex">
   <?php require '../includes/adminSideBar.php'; ?>
<div id="orders-container">
            <?php
            $result = mysqli_query($connect, $sq);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $fullname = $row['fullname'];
                    $email = $row['email'];
                    $userid = $row['id'];
           echo '<div class="orders-card">
                <div class="img-div">
                </div>
                <div class="order-details">
                    <div class="details-container">
                        <p class="detail-title">Name</p>
                        <p class="detail-values">' . $fullname . '</p>
                    </div>
                    <div class="details-container">
                        <p class="detail-title">Email</p>
                        <p class="detail-values">' . $email. '</p>
                    </div>
                </div>
                <div class="redirect-icon" style="background-color:white">
                    <a class="product-button" id="delete-button" onclick="deleteUser('.$userid.')" href="#">Delete</a>
                </div>
            </div>';

                }
            } else {
                echo "No orders found.";
            }
            ?>
</div>
</body>
<