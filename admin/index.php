<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/admin.css?v=<?php echo time();?>" />
    <script src="../js/adminDashboard.js"></script>
    <script>
    // function menuShow() {
    //     let isHidden = document.getElementById("menu-container");
    //     if (isHidden.style.display == "none") {
    //         isHidden.style.display = "flex";

    //     } else {
    //         isHidden.style.display = "none";
    //     }
    // }
    // </script>
</head>

<body>
    <nav>
        <ul class="nav-link">
            <li><a href="#" onclick="menuShow()"><img src="../images/hamburger.svg"></a></li>
            <!-- <li>Dashboard</li> -->
        </ul>

    </nav>
    <div class="maincontainer" style="display:flex; flexwrap:wrap">
        <div id="menu-container">
            <div class="menu-logo-container">
                <img src="../images/logo-big.svg" style="width:130px">
                <p id="admin-txt">Admin</p>
            </div>

            <ul class="ul-items">
                <li class="ul-list"><a><img src="../images/dashboard.svg" class="ul-image"></a><span
                        class="li-text">Dashboard</span></li>
                <li class="ul-list"><a><img src="../images/orders.svg" class="ul-image"></a><span
                        class="li-text">Orders</span></li>
                <li class="ul-list"><a><img src="../images/user.svg" class="ul-image"></a> <span
                        class="li-text">Users</span></li>
                <li class="ul-list"><a><img src="../images/product-icon.svg" class="ul-image"></a><span
                        class="li-text">Products</span></li>
            </ul>
            <a href="#" id="logout"><img src="../images/logout-icon.svg" style="width:35px"><span>LOGOUT</span></a>
        </div>



        <div id="content-container">
            <label class="container-title">Dashboard</label>
            <div id="cards-container">

                <div class="card">
                    <img src="../images/orders.svg" style="width:43px; background:none;">
                    <p class="card-title">Total orders</p>
                    <p class="card-count">158</p>
                </div>
                <div class="card">
                    <img src="../images/userlogo.svg" style="width:43px; background:none">
                    <p class="card-title">Total users</p>
                    <p class="card-count">148</p>
                </div>
                <div class="card">
                    <img src="../images/products.svg" style="width:43px; background:none">
                    <p class="card-title">Total products</p>
                    <p class="card-count">148</p>
                </div>
            </div>

            <label class="container-title" style="margin-top:20px; margin-bottom:20px">Orders</label>
            <div id="orders-container">
                <div class="orders-card">
                    <div class="img-div">
                        <img src="../images/nike.jpg" class="product-img">
                    </div>
                    <div class="order-details">
                        <div class="details-container">
                            <p class="detail-title">first</p>
                            <p class="detail-values">Nike sports</p>
                        </div>
                        <div class="details-container">
                            <p class="detail-title">Size</p>
                            <p class="detail-values">20</p>
                        </div>
                        <div class="details-container">
                            <p class="detail-title">Price</p>
                            <p class="detail-values">1200</p>
                        </div>
                        <div class="details-container">
                            <p class="detail-title">Quantity</p>
                            <p class="detail-values">1 pairs</p>
                        </div>
                    </div>
                    <div class="redirect-icon" style="background-color:white">
                        <a><img src="../images/arrow-right.svg" style="width:40px; background-color:white"></a>
                    </div>
                </div>
                <div class="orders-card">
                    <div class="img-div">
                        <img src="../images/nike.jpg" class="product-img">
                    </div>
                    <div class="order-details">
                        <div class="details-container">
                            <p class="detail-title">Nameasdfsaf</p>
                            <p class="detail-values">Nike sports</p>
                        </div>
                        <div class="details-container">
                            <p class="detail-title">Size</p>
                            <p class="detail-values">20</p>
                        </div>
                        <div class="details-container">
                            <p class="detail-title">Price</p>
                            <p class="detail-values">1200</p>
                        </div>
                        <div class="details-container">
                            <p class="detail-title">Quantity</p>
                            <p class="detail-values">1 pairs</p>
                        </div>
                    </div>
                    <div class="redirect-icon" style="background-color:white">
                        <a><img src="../images/arrow-right.svg" style="width:40px; background-color:white"></a>
                    </div>
                </div>
                <div class="orders-card">
                    <div class="img-div">
                        <img src="../images/nike.jpg" class="product-img">
                    </div>
                    <div class="order-details">
                        <div class="details-container">
                            <p class="detail-title">Nameasdfsaf</p>
                            <p class="detail-values">Nike sports</p>
                        </div>
                        <div class="details-container">
                            <p class="detail-title">Size</p>
                            <p class="detail-values">20</p>
                        </div>
                        <div class="details-container">
                            <p class="detail-title">Price</p>
                            <p class="detail-values">1200</p>
                        </div>
                        <div class="details-container">
                            <p class="detail-title">Quantity</p>
                            <p class="detail-values">1 pairs</p>
                        </div>
                    </div>
                    <div class="redirect-icon" style="background-color:white">
                        <a><img src="../images/arrow-right.svg" style="width:40px; background-color:white"></a>
                    </div>
                </div>
                <div class="orders-card">
                    <div class="img-div">
                        <img src="../images/nike.jpg" class="product-img">
                    </div>
                    <div class="order-details">
                        <div class="details-container">
                            <p class="detail-title">Nameasdfsaf</p>
                            <p class="detail-values">Nike sports</p>
                        </div>
                        <div class="details-container">
                            <p class="detail-title">Size</p>
                            <p class="detail-values">20</p>
                        </div>
                        <div class="details-container">
                            <p class="detail-title">Price</p>
                            <p class="detail-values">1200</p>
                        </div>
                        <div class="details-container">
                            <p class="detail-title">Quantity</p>
                            <p class="detail-values">1 pairs</p>
                        </div>
                    </div>
                    <div class="redirect-icon" style="background-color:white">
                        <a><img src="../images/arrow-right.svg" style="width:40px; background-color:white"></a>
                    </div>
                </div>
                <div class="orders-card">
                    <div class="img-div">
                        <img src="../images/nike.jpg" class="product-img">
                    </div>
                    <div class="order-details">
                        <div class="details-container">
                            <p class="detail-title">Nameasdfsaf</p>
                            <p class="detail-values">Nike sports</p>
                        </div>
                        <div class="details-container">
                            <p class="detail-title">Size</p>
                            <p class="detail-values">20</p>
                        </div>
                        <div class="details-container">
                            <p class="detail-title">Price</p>
                            <p class="detail-values">1200</p>
                        </div>
                        <div class="details-container">
                            <p class="detail-title">Quantity</p>
                            <p class="detail-values">1 pairs</p>
                        </div>
                    </div>
                    <div class="redirect-icon" style="background-color:white">
                        <a><img src="../images/arrow-right.svg" style="width:40px; background-color:white"></a>
                    </div>
                </div>
                <div class="orders-card">
                    <div class="img-div">
                        <img src="../images/nike.jpg" class="product-img">
                    </div>
                    <div class="order-details">
                        <div class="details-container">
                            <p class="detail-title">Nameasdfsaf</p>
                            <p class="detail-values">Nike sports</p>
                        </div>
                        <div class="details-container">
                            <p class="detail-title">Size</p>
                            <p class="detail-values">20</p>
                        </div>
                        <div class="details-container">
                            <p class="detail-title">Price</p>
                            <p class="detail-values">1200</p>
                        </div>
                        <div class="details-container">
                            <p class="detail-title">Quantity</p>
                            <p class="detail-values">1 pairs</p>
                        </div>
                    </div>
                    <div class="redirect-icon" style="background-color:white">
                        <a><img src="../images/arrow-right.svg" style="width:40px; background-color:white"></a>
                    </div>
                </div>
                <div class="orders-card">
                    <div class="img-div">
                        <img src="../images/nike.jpg" class="product-img">
                    </div>
                    <div class="order-details">
                        <div class="details-container">
                            <p class="detail-title">last</p>
                            <p class="detail-values">Nike sports</p>
                        </div>
                        <div class="details-container">
                            <p class="detail-title">Size</p>
                            <p class="detail-values">20</p>
                        </div>
                        <div class="details-container">
                            <p class="detail-title">Price</p>
                            <p class="detail-values">1200</p>
                        </div>
                        <div class="details-container">
                            <p class="detail-title">Quantity</p>
                            <p class="detail-values">1 pairs</p>
                        </div>
                    </div>
                    <div class="redirect-icon" style="background-color:white">
                        <a><img src="../images/arrow-right.svg" style="width:40px; background-color:white"></a>
                    </div>
                </div>
            </div>


        </div>
    </div>


</body>

</html>