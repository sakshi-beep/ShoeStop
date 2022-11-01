<?php
include '../../includes/dbconfig.php';

$query = mysqli_query($connect, "SELECT * from Shoes");

foreach($query as $values){
    echo $values['s-name'];
}

?>