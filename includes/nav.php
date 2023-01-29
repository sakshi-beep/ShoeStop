<?php
session_start();
$fullname = $_SESSION['fullname'];
if(isset($_SESSION['cart'])){

    $item_count = count($_SESSION['cart']);
}

?>

<nav class="navbar navbar-light fixed-top  navbar-expand-lg p-1"
    style=" background-color:#F1F0F0;box-shadow:0px 2px 4px 1px rgba(0, 0, 0, 0.2);">


    <a href="#" class="navbar-brand"><img src="./images/logo-big.svg" class="main-logo" /></a>
    <button class="navbar-toggler bg-black" data-bs-toggle="collapse" data-bs-target="#navbar">
        <img src="./images/hamburger.svg">
    </button>
    <div class="navbar-collapse collapse" id="navbar">
        <form class="form-group-lg d-flex mx-auto p-2">
            <input class="form-control input-lg" type="search" placeholder="Search in the store"
                aria-label="Search for products" id="search-input" />

            <button style="background:none; border:none;margin-left:10px; border-radius:10px"><img
                    src="./images/search-icon.svg"></button>
        </form>

        <ul class="navbar-nav p-2">
            <?php 
        if(isset($_SESSION['fullname'])){
            echo '<li class="nav-item"><a class="nav-link"><img src="./images/userlogo.svg"/>'. $fullname .'</a></li>'; 
            echo '<li class="nav-item"><a href="/shoestop/helpers/customerLogout.php" class="nav-link" style=""><img src="./images/logout.svg"/></a></li>';
        }
        else{
            echo '<li class="nav-item"><a href="/shoestop/screens/login.php" class="nav-link" style="margin-top: 6px">LOGIN</a></li>';
        }
        ?>
            <li class="nav-item <?php if(isset($item_count)>0)
                {
                    echo 'products-icon';
                    
                }
                ?>" >
                <a href="/shoestop/screens/cartScreen.php" class="nav-link"  <?php if(isset($item_count)>0)
                {
                    echo 'data= '.$item_count.'';
                    
                }
                ?>
                style="position:relative"><img
                        src="./images/products.svg" />
                </a>
            </li>


        </ul>
    </div>
</nav>