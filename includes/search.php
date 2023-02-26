<?php
include "../includes/dbconfig.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);
extract($_POST);
$input = $_POST['search'];
$sql = "SELECT * FROM Shoes WHERE s_name LIKE '$input%'";

$search_result = mysqli_query($connect, $sql);
if ($search_result) {
    foreach ($search_result as $res) {
        echo '<a class="list" href="/shoestop/screens/products.php?id=' . $res['s_id'] . '/' . $res['s_name'] . '">
        <img src=' . $res['s_photo'] . ' class="search-img"/>
        <p>' . $res['s_name'] . '</p>
        <p> ' . $res['s_category'] . '</p>
        </a> ';
    }
} else {

    echo '<a>Result not found</a>';
}