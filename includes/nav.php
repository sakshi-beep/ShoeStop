<?php
session_start();
$fullname = $_SESSION['fullname'];
if (isset($_SESSION['cart'])) {

    $item_count = count($_SESSION['cart']);
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <link href="/shoestop/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <script src="/shoestop/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- <link rel="../css/index.css?v32453" /> -->
    <link rel="../css/nav.css?v32453" />
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" defer></script>
    <script defer>
    const search = () => {
        event.preventDefault()
        const product = document.getElementById("search-input").value;
        $.post("/shoestop/includes/search.php", {
            search: product
        }, result => {
            $("#search-list").html(result);
            $("#search-list").show();
        })
    }

    const changeVisibility = () => {
        $("#search-list").html('');
        $("#search-list").hide()
    }
    $(document).click((event) => {
        if (!$(event.target).closest("#search-list, #search-input").length) {
            document.getElementById("search-input").value = null;
            $("#search-list").hide();
        }
    });
    const dropdown = () => {
        const dropItems = document.getElementById("drops").style;
        if (dropItems.display == "none") {
            dropItems.display = "flex";
            dropItems.flexDirection = "column"
        } else {
            dropItems.display = "none"
        }

    }
    </script>

    <style>
    .dropdown {
        display: flex;
        cursor: pointer;
        align-items: center;
        justify-content: center;
        height: 40px;
        width: 40px;
        border-radius: 50%;
        background: #F1F0F0;
        border: 1px solid gray;
    }

    .drops {
        border: 1px solid gray;
        display: none;
        gap: 10px;
        position: absolute;
        top: 75px;
        right: 20px;
        padding: 10px;
    }

    .dropdown-list {
        width: 100%;
        text-decoration: none;
        color: black;
        padding: 10px;
        width: max-content;
        font-size: 16px;
        cursor: pointer
    }

    .dropdown-list:hover {
        padding: 10px;
        background: white;
        color: black;
    }
    </style>
</head>


<nav class="navbar navbar-light navbar-expand-lg p-2"
    style=" background-color:#F1F0F0; border-bottom:1px solid lightgray;position:sticky; top:0; z-index:9999;">


    <a href="../index.php" class="navbar-brand"><img src="/shoestop/images/main-logo.svg"
            style="height:3.5rem; width:8rem" /></a>
    <button class="navbar-toggler bg-black" data-bs-toggle="collapse" data-bs-target="#navbar">
        <img src="/shoestop/images/hamburger.svg">
    </button>
    <div class="navbar-collapse collapse" id="navbar">
        <form class="form-group-lg d-flex mx-auto p-2 search-form">
            <input class="form-control input-lg" type="search" placeholder="Search in the store"
                aria-label="Search for products" id="search-input" />

            <button onclick="search()" style="background:none; border:none;margin-left:10px; border-radius:10px"><img
                    src="/shoestop/images/search-icon.svg"></button>
            <div id="search-list"></div>
        </form>

        <ul class="navbar-nav p-2" style="display: flex; align-items:center; gap:15px; position:relative;">
            <?php if (isset($_SESSION['fullname'])) {
                echo
                '<label onclick="dropdown()" class="nav-item dropdown" ><img src="/shoestop/images/userlogo.svg" /></label>
            <li id="drops" class="nav-item drops">
                <a class="dropdown-list">' . $_SESSION['fullname'] . '</a>
            <a class="dropdown-list" href="/shoestop/helpers/customerLogout.php"><img src="/shoestop/images/logout.svg"
                    style="background:none;" /></a>

            </li>';
            } else {
                echo '<li class="nav-item"><a href="/shoestop/screens/login.php" class="nav-link" style="margin-top: 6px">LOGIN</a></li>';
            }
            ?>


            <li class="nav-item <?php if (isset($item_count) > 0) {
                                    echo 'products-icon';
                                }
                                ?>">
                <a href="/shoestop/screens/cartScreen.php" class="nav-link" <?php if (isset($item_count) > 0) {
                                                                                echo 'data= ' . $item_count . '';
                                                                            }
                                                                            ?> style="position:relative"><img
                        src="/shoestop/images/products.svg" />
                </a>
            </li>


        </ul>
    </div>
</nav>