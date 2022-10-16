<?php
include '../includes/dbconfig.php';

extract($_POST);


    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
$query = mysqli_query($connect, "SELECT * FROM customers where email='$email'");

$emailExists = $query->fetch_assoc();

if($email == $emailExists['email']){
    echo 'Email already exists !';
    return;
}
$query = mysqli_query($connect, "INSERT INTO customers values(DEFAULT, '$email', '$password', '$fullname')");
echo "Account created !";


?>  