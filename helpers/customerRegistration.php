<?php
include '../includes/dbconfig.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Extracting form data securely
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check for existing email
    $stmt = $connect->prepare("SELECT * FROM customers WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo 'Email already exists!';
        return;
    }

    // Hash the password before storing it


    // Insert new record
    $stmt = $connect->prepare("INSERT INTO customers (email, password, fullname) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $password, $fullname);

    if ($stmt->execute()) {
        echo "Account created!";
    } else {
        echo "Error creating account: " . $stmt->error;
    }

    $stmt->close();
}
?>
