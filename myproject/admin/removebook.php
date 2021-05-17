<?php

require("../includes/common.php");
$id= $_GET['id'];
//$query = "SELECT userType FROM users WHERE id='$id' ";
//$result = mysqli_query($con, $query) or die ($mysqli_error($con));
//$row = mysqli_fetch_array($result);
//if ($row["userType"]!= admin) {
   // Delete the rows from user_items table where item_id and user_id equal to the item_id and user_id we got from the cart page and session
    $query = "DELETE FROM book WHERE id='$id'";
    $res = mysqli_query($con, $query) or die(mysqli_error($con));
    header("location:booklist.php");
//}
/* else {
     header('location: userlist.php?error=Admin cannot be removed');
}*/
?>