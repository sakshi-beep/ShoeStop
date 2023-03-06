<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link rel="stylesheet" href="../css/all.css?v=<?php echo time() ?>" />
    <link rel="stylesheet" href="../css/nav/">
</head>


<body class="main">
    <?php include "../includes/nav.php" ?>
    <div class="container">
        <div class="desc">

            <h1>All Categories</h1>
            <h3>Every category of shoes all in one place</h3>
        </div>
        <div class="all-products">
            <?php
            include "../includes/dbconfig.php";
            $allProduct = mysqli_query($connect, "SELECT * from Shoes");

            foreach ($allProduct as $isall) {

                echo '<a class="all-card" href="/stepup/screens/products.php?id=' . $isall['s_id'] . '/' . $isall['s_name'] . '">
    <div class="image-container">
        <img src=' . $isall['s_photo'] . '
            class="all-img" />
        </div>
        <div class="all-desc">
            <p class="all-txt">' . $isall['s_name'] . '</p>
            <p class="all-txt">Rs.' . $isall['s_price'] . '</p>
        </div>
    
</a>';
            }
            ?>
        </div>
    </div>
</body>

</html>