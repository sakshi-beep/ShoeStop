<?php
include "../includes/dbconfig.php";
$featuredProduct = mysqli_query($connect, "SELECT * from Shoes where isFeatured = '1'");

foreach($featuredProduct as $isFeatured){

    echo '<div class="featured-card">
    <div class="image-container">
        <img src='.$isFeatured['s_photo'].'
            class="featured-img">
        <div class="featured-desc">
            <p class="featured-txt">'.$isFeatured['s_name'].'</p>
            <p class="featured-txt">Rs.'.$isFeatured['s_price'].'</p>
        </div>
    </div>
</div>';
}
?>