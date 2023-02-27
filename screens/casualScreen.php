<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casual</title>
    <link rel="stylesheet" href="../css/casual.css?v=<?php echo time() ?>" />
    <!-- <script src="https://code.jquery.com/jquery-3.6.1.min.js" defer></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/nav.css" />
</head>


<body class="main">
    <?php include "../includes/nav.php" ?>
    <div class="container">
        <div class="desc">
            <h1 style="background-color:white;">Casual Shoes</h1>

            <h3 style="background-color:white;">Jeans, Chinos or Pants they look good with anything !</h3>
        </div>
        <div class="casual-products">
            <?php
            include "../includes/dbconfig.php";
            $casualProduct = mysqli_query($connect, "SELECT * from Shoes where s_category = 'casual'");

            foreach ($casualProduct as $isCasual) {

                echo '<a class="casual-card" href="/shoestop/screens/products.php?id=' . $isCasual['s_id'] . '/' . $isCasual['s_name'] . '">
    <div class="image-container">
        <img src=' . $isCasual['s_photo'] . '
            class="casual-img" />
        </div>
        <div class="casual-desc">
            <p class="casual-txt">' . $isCasual['s_name'] . '</p>
            <p class="casual-txt">Rs.' . $isCasual['s_price'] . '</p>
        </div>
    
</a>';
            }
            ?>
        </div>
    </div>
    <?php include "../includes/footer.php" ?>

</body>

</html>