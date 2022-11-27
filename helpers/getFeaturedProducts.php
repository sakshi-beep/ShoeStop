<?php 
include '../includes/dbconfig.php';

extract($_POST);
$id = $_POST['id'];

$query = mysqli_query($connect, "SELECT * FROM Shoes WHERE s_id = '$id'");

foreach($query as $values){
    echo '<h1>'.$values['s_id'].'</h1>
    <h1>'.$values['s_name'].'</h1>
    ';
}

// echo $query;

?>