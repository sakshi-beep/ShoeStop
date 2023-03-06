<?php include "./includes/dbconfig.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];

$query = mysqli_query($connect, "INSERT INTO user values('$name', '$email', '$contact')");
$get = mysqli_query($connect, "SELECT * from user");


if ($get) {
    foreach ($get as $value) {
        echo $value['name'];
        echo $value['email'];
        echo $value['contact'];
    }
} else {
    echo 'something went wrong';
}