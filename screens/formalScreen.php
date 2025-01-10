<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formal</title>
    <link rel="stylesheet" href="../css/formal.css?v=<?php echo time() ?>" />
    <link rel="stylesheet" href="../css/nav.css" />
</head>


<body class="main">
    <?php include "../includes/nav.php" ?>
    <div class="container">
        <div class="desc">
            <h1 style="background-color:white">Formal Shoes</h1>
            <h3 style="background-color:white">For when you want to look elegant and classy </h3>
        </div>
        <div class="formal-products">
            <?php
            include "../includes/dbconfig.php";
            $formalProduct = mysqli_query($connect, "SELECT * from Shoes where s_category = 'formal'");

            foreach ($formalProduct as $isFormal) {

                echo '<a class="formal-card" href="/Step up/screens/products.php?id=' . $isFormal['s_id'] . '/' . $isFormal['s_name'] . '">
    <div class="image-container">
        <img src=' . $isFormal['s_photo'] . '
            class="formal-img" />
        </div>
        <div class="formal-desc">
            <p class="formal-txt">' . $isFormal['s_name'] . '</p>
            <p class="formal-txt">Rs.' . $isFormal['s_price'] . '</p>
        </div>
    
</a>';
            }
            ?>
        </div>
    </div>
    <?php include "../includes/footer.php" ?>

</body>

</html>