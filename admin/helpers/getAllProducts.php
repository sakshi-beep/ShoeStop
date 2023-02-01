<?php
include '../../includes/dbconfig.php';

$query = mysqli_query($connect, "SELECT * from Shoes");

$count = 0;

foreach($query as $value){
$count++;
}
?>