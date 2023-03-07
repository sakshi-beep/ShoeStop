<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link rel="stylesheet" href="../css/all.css?v=<?php echo time() ?>" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/nav/">
    <style>
    #btn-scroll {
        position: fixed;
        padding: 10px;
        border-radius: 50%;
        background-color: white;
        bottom: 60px;
        right: 80px;
        display: none;
        animation: flash 2s infinite forwards;

    }

    @keyframes flash {
        0% {
            background-color: white;
            border: 3px solid white;
        }

        100% {
            background-color: white;
            border: 3px solid black;
        }
    }

    .arrow {
        width: 40px;
        height: 40px
    }

    @media(max-width:768px) {
        #btn-scroll {
            bottom: 10px;
            padding: 10px;
            right: 45%;

        }

        .arrow {
            width: 20px;
            height: 20px
        }
    }
    </style>
</head>


<body class="main" id="carousel">
    <?php include "../includes/nav.php" ?>
    <div class="container">
        <div class="desc">

            <h1>All Categories</h1>
            <h3>Every category of shoes all in one place</h3>
        </div>
        <div class="all-products">
            <?php
            include "../includes/dbconfig.php";
            $allProduct = mysqli_query($connect, "SELECT * from Shoes");

            foreach ($allProduct as $isall) {

                echo '<a class="all-card" href="/stepup/screens/products.php?id=' . $isall['s_id'] . '/' . $isall['s_name'] . '">
    <div class="image-container">
        <img src=' . $isall['s_photo'] . '
            class="all-img" />
        </div>
        <div class="all-desc">
            <p class="all-txt">' . $isall['s_name'] . '</p>
            <p class="all-txt">Rs.' . $isall['s_price'] . '</p>
        </div>
    
</a>';
            }
            ?>
        </div>
    </div>

    <a id="btn-scroll" href="#carousel"><img src="../images/arrow.svg" alt=""></a>
    <script defer>
    var containerAll = document.getElementById("carousel");

    containerAll.onscroll = function() {
        const scrollHeight = containerAll.scrollHeight / 3;
        const offset = window.pageYOffset;
        if (offset >= scrollHeight) {
            document.getElementById("btn-scroll").style.display = "flex"
        } else {
            document.getElementById("btn-scroll").style.display = "none"
        }
    }
    const btn = document.getElementsByClassName("btn-scroll");
    </script>
</body>

</html>