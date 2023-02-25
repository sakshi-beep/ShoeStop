<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports</title>
    <link rel="stylesheet" href="../css/sport.css?v=<?php echo time()?>" />
</head>


<body class="main">
    <?php include "../includes/nav.php" ?>
    <div class="container">
        <h1>Sports Shoes</h1>
        <h3>Perfect for any of your athletic adventures.</h3>
        <div class="sports-products">
            <?php
include "../includes/dbconfig.php";
$sportsProduct = mysqli_query($connect, "SELECT * from Shoes where s_category = 'sports'");

foreach($sportsProduct as $issports){

    echo '<a class="sports-card" href="/shoestop/screens/products.php?id='.$issports['s_id'].'/'.$issports['s_name'].'">
    <div class="image-container">
        <img src='.$issports['s_photo'].'
            class="sports-img" />
        </div>
        <div class="sports-desc">
            <p class="sports-txt">'.$issports['s_name'].'</p>
            <p class="sports-txt">Rs.'.$issports['s_price'].'</p>
        </div>
    
</a>';
}
?>
        </div>
    </div>
</body>

</html>