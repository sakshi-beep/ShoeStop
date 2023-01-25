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
    <script src="../js/products.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <title>Products</title>
</head>

<body>
    <!-- <div style="width:100%;height:70px;background:yellow"></div> -->
    <nav class="navbar">
        <div class="logoandmenu">

            <div class="logo_container">
                <img src="../images/logo-big.svg" alt="Shoe logo" class="logo">
            </div>
        </div>
        <a class="hamburger">
            <img src="../images/hamburger.svg">
        </a>
    </nav>
    <div class="main_container">
        <?php foreach($query as $featured){
            echo '
            
            
            <div class="product_container">
            <div class="image_container">
                <img src='.$featured['s_photo'].'
                    style="object-fit:cover; height:100%; width:100%;border-radius:5px" />
            </div>
            <div class="details_container">
                    <p class="product_name">'.$featured['s_name'].'</p>
                    <p class="product_category"><span class="category">Category:  </span> '.$featured['s_category'].'</p>
                    <p class="product_price">Rs '.$featured['s_price'].'</p>
                    <label class="product_size" for="size_container">Size</label>
                    <div class="size_container">
                    <a class="size">6</a>
                    <a class="size">7</a>
                    <a class="size">8</a>
                    <a class="size">9</a>
                    </div>
                    <div class="quantity_container">
                        <p class="product_quantity">Quantity</p>
                        <div class="quantity">
                            <button class="quantity_btn" onclick= incDec("+")>+</button>
                            <p class="quantity_value" id="quantity_value">1</p>
                            <button class="quantity_btn" onclick= incDec("-")>-</button>
                        </div>
                    </div>
                <div class="btn_container">
                    <button class="btn" >Buy Now</button>
                    <button class="btn" onclick ="addtoCart(\''. $featured['s_name'] .'\',\''. $featured['s_photo'] .'\', \''. $featured['s_size'] .'\', \''. $featured['s_category'] .'\', \''. $featured['s_price'] .'\', \''. $featured['s_quantity'] .'\', \''. $featured['s_id'] .'\')" >Add To Cart</button>
                </div>
            </div>
        </div>
            ';
        }
        ?>
        
    </div>
</body>

</html>