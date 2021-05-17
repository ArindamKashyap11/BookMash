<?php
require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $user_id = $_SESSION['email'];
    $query1 = "select price from book where id='$item_id' ";
    $result = mysqli_query($con, $query1)or die($mysqli_error($con));
    $row = mysqli_fetch_array($result);
    $query = "INSERT INTO cart(email,Itemid,status,amount) VALUES('".$user_id."', '".$item_id."', 'Added to cart','".$row['price']."')";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: products.php');
}
?>   