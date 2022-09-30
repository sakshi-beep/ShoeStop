<?php
include '../files/dbconfig.php';

extract($_POST);

echo $_POST['email'];
echo $_POST['password'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = mysqli_query($connect, "INSERT INTO customers values(DEFAULT, '$fullname', '$email', '$password')");
    echo "<script>alert('user created successfully')</script>";


