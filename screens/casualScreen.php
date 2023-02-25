<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casual</title>
    <link rel="stylesheet" href="../css/casual.css?v=<?php echo time()?>" />
</head>


<body class="main">
    <?php include "../includes/nav.php" ?>
    <div class="container">
        <h1>Casual Shoes</h1>
        <h3>Jeans, Chinos or Pants they look good with anything !</h3>
        <div class="casual-products">
            <?php
include "../includes/dbconfig.php";
$casualProduct = mysqli_query($connect, "SELECT * from Shoes where s_category = 'casual'");

foreach($casualProduct as $isCasual){

    echo '<a class="casual-card" href="/shoestop/screens/products.php?id='.$isCasual['s_id'].'/'.$isCasual['s_name'].'">
    <div class="image-container">
        <img src='.$isCasual['s_photo'].'
            class="casual-img" />
        </div>
        <div class="casual-desc">
            <p class="casual-txt">'.$isCasual['s_name'].'</p>
            <p class="casual-txt">Rs.'.$isCasual['s_price'].'</p>
        </div>
    
</a>';
}
?>
        </div>
    </div>
</body>

</html>