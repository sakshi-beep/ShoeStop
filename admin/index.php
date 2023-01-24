<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./css/admin.css?v=<?php echo time();?>" />
    <link rel="stylesheet" href="./css/adminSideBar.css?v=<?php echo time();?>" />
    <link rel="stylesheet" href="./css/adminNav.css?v=<?php echo time();?>">

    <script src="./js/navbarHamburger.js"></script>
</head>

<body>
<?php require './includes/adminNav.php'?>
    <div class="maincontainer" style="display:flex;">
        <?php
    require './includes/adminSideBar.php';
    ?>
        <?php
    require './screens/dashboard.php';
    ?>
    </div>


</body>

</html>