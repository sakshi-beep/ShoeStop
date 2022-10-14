<?php 
$photo =  $_FILES['photo'];
// echo '<img src = "../images/'.$photo.'">';
// echo $photo;

foreach($photo as $values){
    echo $values;
}
?>