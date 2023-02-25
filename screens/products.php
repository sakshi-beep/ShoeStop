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
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="../js/products.js?2445456543" defer></script>
    <title>Products</title>
</head>

<body>
    <?php include "../includes/nav.php"?>
    <div class="main_container">
        <?php foreach($query as $featured){
            echo '
            
            
            <div class="product_container">
            <div class="image_container">
                <img src='.$featured['s_photo'].' id="product-img"
                    style="object-fit:cover; height:100%; width:100%;border-radius:5px" />
            </div>
            <div class="details_container">
                    <p class="product_name" id="product_name">'.$featured['s_name'].'</p>
                    <p class="product_category"> Category:<span class="category" id="product_category"> '.$featured['s_category'].' </span></p>
                    <p class="product_price">Rs '.$featured['s_price'].'</p>
                    <label class="product_size" for="size_container">Size</label>
                    <div class="size_container">
                    <a class="size" onclick="product.setSize(event)">6</a>
                    <a class="size" onclick="product.setSize(event)">7</a>
                    <a class="size" onclick="product.setSize(event)">8</a>
                    <a class="size" onclick="product.setSize(event)">9</a>
                    </div>
                    <div class="quantity_container">
                        <p class="product_quantity">Quantity</p>
                        <div class="quantity">
                        <button class="quantity_btn" onclick= product.setQuantity("-")>-</button>
                        <p class="quantity_value" id="quantity_value">1</p>
                        <button class="quantity_btn" onclick= product.setQuantity("+")>+</button>
                        </div>
                    </div>
                <div class="btn_container">
                    <button class ="btn-add" onclick="product.addtoCart('.$featured['s_id'].','.$featured['s_price'].' )">Add to Cart</button>
                </div>
            </div>
        </div>
            ';
        }
        ?>

    </div>
</body>

</html>