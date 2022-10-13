<?php
include '../files/dbconfig.php';

$query= mysqli_query($connect, "SELECT * FROM customers where id='44'");

foreach($query as $key => $value){

    // echo '<h1>'. $value["fullname"]. ' </h1>'; 
    // echo $value['fullname'];
    echo'<img src="'.$value['fullname'].'"/>';
    
}




?>