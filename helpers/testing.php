<?php
include '../files/dbconfig.php';

$query= mysqli_query($connect, "SELECT * FROM customers where id='53'");

foreach($query as $key => $value){

    // echo '<h1>'. $value["email"]. ' </h1>'; 
    // echo $value['fullname'];
    // echo'<img src="'.$value['fullname'].'" style="height:190px;"/>';
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
</head>
<body>
    <form action="./result.php" method="post" enctype="multipart/form-data">
    <input type="file" name="photo" id="upload">
    <input type="submit">
    </form>

    <img src="https://images.pexels.com/photos/1102777/pexels-photo-1102777.jpeg?auto=compress&cs=tinysrgb&w=1600" style="height:220px">

</body>
</html>