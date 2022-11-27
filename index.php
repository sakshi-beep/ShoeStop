<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./css/index.css?v=<?php echo time();?>" />
    <script src="./js/index.js?v=<?php echo time(); ?>"></script>
</head>

<body style="overflow-x:hidden;">
    <?php
    require './includes/nav.php';
    ?>
    <main class="hero">
        <div class="heroimage">
            <img src="./images/shoelogo.svg" class="shoeimage-mobile" id="shoe" />
        </div>
        <div class="description">
            <h1 class="mainheading">WALK THE TALK</h1>
            <p class="subheading">Get your favourite pair in exclusive price only at ShoesTop</p>
            <button class="btn-action">Shop Now</button>
        </div>
    </main>

    <!-- <section class="categories"> -->

    <div class="categories-container">
        <h2 class="container-title">Categories</h2>
        <div class="categories-items">
            <a class="item" id="casual" href="./screens/casualScreen.php">
                Casual
            </a>
            <a class="item" id="sports" href="./screens/sportsScreen.php">
                Sports
            </a>
            <a class="item" id="formal" href="./screens/formalScreen.php">
                Formal
            </a>
        </div>
    </div>
    <!-- </section> -->
    <div class="featured-container">
        <h2 class="container-title">Featured</h2>
        <div class="featured-products">
            <?php
include "./includes/dbconfig.php";
$featuredProduct = mysqli_query($connect, "SELECT * from Shoes where isFeatured = '1'");

foreach($featuredProduct as $isFeatured){

    echo '<a class="featured-card" href="/shoestop/screens/products.php?id='.$isFeatured['s_id'].'/'.$isFeatured['s_name'].'">
    <div class="image-container">
        <img src='.$isFeatured['s_photo'].'
            class="featured-img" />
        </div>
        <div class="featured-desc">
            <p class="featured-txt">'.$isFeatured['s_name'].'</p>
            <p class="featured-txt">Rs.'.$isFeatured['s_price'].'</p>
        </div>
    
</a>';
}
?>
        </div>
    </div>
</body>

</html>