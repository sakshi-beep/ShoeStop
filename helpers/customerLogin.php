<?php
include '../includes/dbconfig.php';

extract($_POST);

$email = $_POST['email'];
$password = $_POST['password'];

// Use a prepared statement to prevent SQL injection
$stmt = $connect->prepare("SELECT * FROM customers WHERE email = ? AND password=?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
    
  
 
   

        session_start();
        $user_id = $data['id'];
        $fullname = $data['fullname'];
        $_SESSION['fullname'] = $fullname;
        $_SESSION['user_id'] = $user_id;
        echo "Login successful";
    
       
    
}  else {
    echo "Invalid username or password";
}

$stmt->close();
?>
