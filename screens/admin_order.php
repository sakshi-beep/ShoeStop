<?php
include "../includes/dbconfig.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);

$sq = "SELECT
orders.order_id,
orders.status,
orders.payment_method,
orders.user_id,
Shoes.s_name,
Shoes.s_photo,
Shoes.s_category,
order_details.price,
order_details.size
FROM
orders
INNER JOIN order_details ON orders.order_id = order_details.order_id
INNER JOIN Shoes ON order_details.product_id = Shoes.s_id
";

// Execute the SQL query and store the result set in a variable
$result = mysqli_query($connect, $sq);

// Check if the query returned any rows
if (mysqli_num_rows($result) > 0) {
    // Output the beginning of the HTML table
    echo "<table><tr><th>Order ID</th><th>Status</th><th>Payment Method</th><th>User ID</th><th>Product Name</th><th>Product Photo</th><th>Product Category</th><th>Price</th><th>Size</th></tr>";

    // Loop through the rows in the result set and output each row as a table row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row['order_id'] . "</td><td>" . $row['status'] . "</td><td>" . $row['payment_method'] . "</td><td>" . $row['user_id'] . "</td><td>" . $row['s_name'] . "</td><td>" . $row['s_photo'] . "</td><td>" . $row['s_category'] . "</td><td>" . $row['price'] . "</td><td>" . $row['size'] . "</td></tr>";
    }

    // Output the end of the HTML table
    echo "</table>";
} else {
    // Output an error message if the query didn't return any rowsda
    echo "No orders found.";
}
