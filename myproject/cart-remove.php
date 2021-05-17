<?php

require("includes/common.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET["id"]; 
    $user_id = $_SESSION['email'];
    
    // Delete the rows from CART table where item_id and user_id equal to the item_id and user_id we got from the cart page and session
    $query = "DELETE FROM cart WHERE id='$item_id' AND email='$user_id' ";
    $res = mysqli_query($con, $query) or die($mysqli_error($con));
    header("location:cart.php");
}
?>