<?php
include '../includes/dbconfig.php';

extract($_POST);
$email = $_POST['email'];
$password = $_POST['password'];
$query = mysqli_query($connect, "SELECT * FROM customers WHERE email ='$email' AND password='$password'");
$row = mysqli_num_rows($query);

if ($row) {
    $data = $query->fetch_assoc();
    session_start();
    $user_id = $data['s_id'];
    $fullname = $data['fullname'];
    $_SESSION['fullname'] = $fullname;
    $_SESSION['user_id'] = $user_id;
    echo "login successfull";
} else {
    echo "Invalid username or password";
}