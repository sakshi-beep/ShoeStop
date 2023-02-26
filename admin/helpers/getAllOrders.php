<?php
include '../../includes/dbconfig.php';

$query = mysqli_query($connect, "SELECT * from orders");

$count = 0;

foreach($query as $value){
$count++;
}
