<?php
include '../files/dbconfig.php';

extract($_POST);

echo $_POST['email'];
echo $_POST['password'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = mysqli_query($connect, "SELECT * FROM customers WHERE email ='$email' AND password='$password'");
    $row = mysqli_num_rows($query);
    if ($row) {
        echo "<script>alert('Login Successful');window.location.href='../index.php';</script>";
    } else {
        echo "<script>alert('Please check your username or password');window.location.href='../login.php';</script>";
    }
