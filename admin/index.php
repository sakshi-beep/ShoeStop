<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/admin.css?v=<?php echo time();?>" />
    <script src="../js/adminDashboard.js"></script>
</head>

<body>
    <nav>
        <ul class="nav-link">
            <li><a href="#" onclick="menuShow()"><img src="../images/hamburger.svg"></a></li>
            <!-- <li>Dashboard</li> -->
        </ul>

    </nav>
    <div class="maincontainer" style="display:flex; flexwrap:wrap">
    <?php
    require '../files/adminSideBar.php';
    ?>
        <?php
    require './dashboard.php';
    ?>
    </div>


</body>

</html>