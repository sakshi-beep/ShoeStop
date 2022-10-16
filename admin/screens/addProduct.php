<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/addProduct.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="../css/adminSideBar.css?v=<?php echo time();?>">
    <script src="../js/navbarHamburger.js"></script>
    <title>Products</title>
</head>

<body>
    <?php require '../includes/adminNav.php'?>

    <div class="maincontainer">
        <?php require '../includes/adminSideBar.php'?>
        <div id="products-container">
            <label class="container-title">Add Products</label>
            <div id="add-products">
                <form class="add-products-form">
                    <div class="input-container">
                        <label class="input-labels">Name</label>
                        <input type="text" placeholder="enter product name" class="form-inputs" id="name-input">
                        <span class="required-name"></span>
                    </div>
                    <div class="input-container">

                    </div>
                    <div class="input-container">

                    </div>
                    <div class="input-container">

                    </div>
                    <div class="input-container">

                    </div>
                    <div class="input-container">

                    </div>
                    <div class="input-container">

                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>