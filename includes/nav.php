<?php
session_start();
$fullname = $_SESSION['fullname'];
if(isset($_SESSION['cart'])){

    $item_count = count($_SESSION['cart']);
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="../css/index.css?v32453" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" defer></script>
</head>


<nav class="navbar navbar-light sticky top-10  navbar-expand-lg p-1"
    style=" background-color:#F1F0F0;box-shadow:0px 2px 4px 1px rgba(0, 0, 0, 0.2);">


    <a href="../index.php" class="navbar-brand"><img src="/shoestop/images/logo-big.svg" class="main-logo" /></a>
    <button class="navbar-toggler bg-black" data-bs-toggle="collapse" data-bs-target="#navbar">
        <img src="/shoestop/images/hamburger.svg">
    </button>
    <div class="navbar-collapse collapse" id="navbar">
        <form class="form-group-lg d-flex mx-auto p-2">
            <input class="form-control input-lg" type="search" placeholder="Search in the store"
                aria-label="Search for products" id="search-input" />

            <button style="background:none; border:none;margin-left:10px; border-radius:10px"><img
                    src="/shoestop/images/search-icon.svg"></button>
        </form>

        <ul class="navbar-nav p-2">
            <?php 
        if(isset($_SESSION['fullname'])){
            echo '<li class="nav-item"><a class="nav-link"><img src="/shoestop/images/userlogo.svg"/>'. $fullname .'</a></li>'; 
            echo '<li class="nav-item"><a href="/shoestop/helpers/customerLogout.php" class="nav-link" style=""><img src="/shoestop/images/logout.svg"/></a></li>';
        }
        else{
            echo '<li class="nav-item"><a href="/shoestop/screens/login.php" class="nav-link" style="margin-top: 6px">LOGIN</a></li>';
        }
        ?>
            <li class="nav-item <?php if(isset($item_count)>0)
                {
                    echo 'products-icon';
                    
                }
                ?>">
                <a href="/shoestop/screens/cartScreen.php" class="nav-link" <?php if(isset($item_count)>0)
                {
                    echo 'data= '.$item_count.'';
                    
                }
                ?> style="position:relative"><img src="/shoestop/images/products.svg" />
                </a>
            </li>


        </ul>
    </div>
</nav>