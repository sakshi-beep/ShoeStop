<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" href="../css/adminSideBar.css?v=<?php echo time();?>">
</head>
<body>
<div id="menu-container">
            <div class="menu-logo-container">
                <img src="/shoestop/images/logo-big.svg" style="width:130px">
                <p id="admin-txt">Admin</p>
            </div>

            <ul class="ul-items">
                <li class="ul-list"><a class="ul-links" href="/shoestop/admin/index.php"><img src="/shoestop/images/dashboard.svg" class="ul-image"><span
                        class="li-text">Dashboard</span></a></li>
                </a>
                <li class="ul-list"><a class="ul-links" href="#"><img src="/shoestop/images/orders.svg" class="ul-image"><span
                        class="li-text">Orders</span></a></li>
                <li class="ul-list"><a class="ul-links" href="#"><img src="/shoestop/images/user.svg" class="ul-image"><span
                        class="li-text">Users</span></a></li>
                <li class="ul-list"><a class="ul-links" href="/shoestop/admin/screens/addProduct.php"><img src="/shoestop/images/product-icon.svg" class="ul-image"><span
                        class="li-text">Products</span></a></li>
            </ul>
            <a href="#" id="logout"><img src="/shoestop/images/logout-icon.svg" style="width:35px"><span>LOGOUT</span></a>
        </div>
</body>
</html>

