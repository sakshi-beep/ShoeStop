<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/addProduct.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="../css/adminSideBar.css?v=<?php echo time();?>">
    <script src="../js/navbarHamburger.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" defer></script>
    <title>Products</title>
</head>
<script src="../js/addProduct.js" defer></script>

<body>
    <?php require '../includes/adminNav.php'?>

    <div class="main-container">
        <?php require '../includes/adminSideBar.php'?>
        <div id="products-form-container">
            <label class="container-title" id="that">Add Products</label>
            <div id="add-products">
                <form class="add-products-form" method="POST">
                    <div class="input-container">
                        <label class="input-labels">Name</label>
                        <input type="text" placeholder="enter product name" name="product-name" class="form-inputs"
                            id="name-input">
                        <span class="required-name"></span>
                    </div>
                    <div class="category-select">
                        <div class="two-input-container">

                            <label class="input-labels">Category</label>
                            <select name="product-category">
                                <option value="casual">Casual</option>
                                <option value="sports">Sports</option>
                                <option value="formal">Formal</option>

                            </select>
                        </div>
                        <div class="two-input-container">
                            <label class="input-labels">Size</label>
                            <input type="number" placeholder="enter size" name="product-size" class="form-inputs"
                                id="size-input">

                        </div>
                    </div>
                    <div class="category-select">

                        <div class="two-input-container">

                            <label class="input-labels">Featured</label>
                            <select name="product-featured">
                                <option value=1>yes</option>
                                <option value=0>no</option>

                            </select>
                        </div>
                        <div class="two-input-container">
                            <label class="input-labels">Price</label>
                            <input type="number" placeholder="enter price" name="product-price" class="form-inputs"
                                id="price-input">

                        </div>
                    </div>
                    <div class="category-select">

                        <div class="two-input-container">

                            <label class="input-labels">Quantity</label>
                            <input type="number" placeholder="enter quantity" name="product-quantity"
                                class="form-inputs" id="quantity-input">

                        </div>
                        <div class="two-input-container">
                            <label class="input-labels">Photo Url</label>
                            <input type="text" placeholder="enter url" name="product-photo" class="form-inputs"
                                id="photo-input" onblur="getPhotoUrl()">
                        </div>
                    </div>
                    <div id="img-div">
                        <img src="" id="photo">
                    </div>

                    <button id="btn-submit" onclick="addProduct()">Add Product</button>
                </form>
            </div>
            <div class="products-container">
                <label class="container-title" id="this">Products</label>
                <div class="allproducts-container">
                    <?php include '../includes/allProducts.php';?>
                </div>
            </div>

        </div>
        <div class="updateform-container">

            <?php include '../includes/updateForm.php';?>
        </div>
    </div>
</body>

</html>