<?php 
include '../includes/dbconfig.php';

extract($_GET);
$id = $_GET['id'];
$query = mysqli_query($connect, "SELECT * FROM Shoes WHERE s_id = '$id'");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/products.css?v=<?php echo time();?>" />
    <title>Products</title>
</head>

<body>
    <div style="width:100%;height:70px;background:yellow"></div>
    <div class="main_container">
        <div class="product-container">
            <div class="image_container">
                <img src="https://www.goldstarshoes.com/Media/dragon_1_bl.jpg"
                    style="object-fit:cover; height:100%; width:100%" />
            </div>
            <div class="details_container">
                    <p class="product_name">Productname</h1>
                    <p class="product_category">product category</h2>
                    <p class="product_price">product price</p>
                    <p class="product_size">product size</p>
                    <div class="quantity_container">
                        <p class="product_quantity">Quantity</p>
                        <div class="quantity">
                            <button class="quantity_btn">+</button>
                            <p class="quantity_value">1</p>
                            <button class="quantity_btn">-</button>
                        </div>
                    </div>
                <div class="btn_container">
                    <button class="btn">Buy Now</button>
                    <button class="btn">Add To Cart</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>