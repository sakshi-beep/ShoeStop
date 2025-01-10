<?php
include '../../includes/dbconfig.php';

extract($_POST);

$id = $_POST['id']; // Get the product ID from the POST request

// Use a prepared statement to prevent SQL injection
$stmt = $connect->prepare("DELETE FROM shoes WHERE s_id = ?");
$stmt->bind_param("i", $id); // Bind the $id as an integer parameter

if ($stmt->execute()) {
    
    echo 'Product Deleted';
} else {
    echo $stmt->error;
    echo 'Sorry, failed to delete the product';
}

$stmt->close(); // Close the prepared statement
?>
