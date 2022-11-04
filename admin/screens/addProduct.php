<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/addProduct.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="../css/adminSideBar.css?v=<?php echo time();?>">
    <script src="../js/navbarHamburger.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <title>Products</title>
</head>
<script>
const addProduct= () =>{
    event.preventDefault();
    const formValues = $("form").serializeArray();
    const obj = {
            [formValues[0].name]: formValues[0].value, 
            [formValues[1].name]: formValues[1].value,
            [formValues[2].name]: formValues[2].value,
            [formValues[3].name]: formValues[3].value,
            [formValues[4].name]: formValues[4].value,
            [formValues[5].name]: formValues[5].value,
            [formValues[6].name]: formValues[6].value,
        }

    
    $.post("../helpers/handleAddProduct.php", obj, result=>{
        $(".allproducts-container").load("addProduct.php .allproducts-container");
        // $(".add-products-form").load("addProduct.php .add-products-form");

    })
    $("form")[0].reset();
}

const deleteProduct = (sID) => {
    event.preventDefault();
    alert(sID);
    $.post(
        "../helpers/deleteProduct.php", {
            id: sID
        },
        result => {
            $(".allproducts-container").load("addProduct.php .allproducts-container");
            $(".add-products").load("addProduct.php .add-products");
        }
    )
}


const getPhotoUrl = () => {
    let url = document.getElementById("photo-input").value;
    if (url.length > 1) {
        document.getElementById("photo").src = `${url}`;
        document.getElementById("img-div").style.display = "flex";
        document.getElementById("photo").style.display = "block";
    };

}
</script>

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
                    <div id="img-div" style="height:350px; width:90%; display:none; background-color:white">
                        <img src="" id="photo"
                            style="height:100%; width:100%; object-fit:contain; display:none; background-color:white">
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
    </div>

</body>

</html>